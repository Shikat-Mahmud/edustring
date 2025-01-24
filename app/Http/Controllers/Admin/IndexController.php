<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Invest;
use App\Models\Mentor;
use App\Models\Partner;
use App\Models\Review;
use App\Models\Subscriber;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApplicationSetting;
use Illuminate\Support\Facades\Schema;




class IndexController extends Controller
{

    public function index()
    {
        if (auth()->user()->can('admin-panel')) {
            $latestStudents = Application::orderBy('created_at', 'desc')->take(10)->get();
            $totalApplication = Application::count();
            $totalAdmission = Application::where('status', 'Success')->count();
            $totalIncome = Application::sum('amount');
            $totalInvest = Invest::sum('amount');

            $lastMonthStart = Carbon::now()->subMonth()->startOfMonth();
            $lastMonthEnd = Carbon::now()->subMonth()->endOfMonth();
            $totalLastMonthIncome = Application::whereBetween('created_at', [$lastMonthStart, $lastMonthEnd])->sum('amount');
            $totalLastMonthInvest = Invest::whereBetween('created_at', [$lastMonthStart, $lastMonthEnd])->sum('amount');

            $startDate = Carbon::now()->subMonths(12)->startOfMonth();
            $endDate = Carbon::now()->endOfMonth();
            $totalAdmissionsLast12Months = Application::where('status', 'Success')
                ->whereBetween('created_at', [$startDate, $endDate])
                ->count();

            return view('admin.main.index', compact('latestStudents', 'totalApplication', 'totalAdmission', 'totalIncome', 'totalInvest', 'totalLastMonthIncome', 'totalLastMonthInvest', 'totalAdmissionsLast12Months'));
        } else {
            return redirect()->back()->with('error', 'You do not have permission to go to admin panel.');
        }
    }

    public function login()
    {
        $general = ApplicationSetting::latest()->first();
        return view('admin.main.users.admin_login', compact('general'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $models = [
            'User' => User::class,
            'Application' => Application::class,
            'Blog' => Blog::class,
            'Contact' => Contact::class,
            'Invest' => Invest::class,
            'Mentor' => Mentor::class,
            'Partner' => Partner::class,
            'Review' => Review::class,
            'Subscriber' => Subscriber::class,
        ];

        $results = [];

        foreach ($models as $modelName => $model) {
            $table = (new $model)->getTable();

            $columns = Schema::getColumnListing($table);

            $modelQuery = $model::query();

            foreach ($columns as $column) {
                $modelQuery->orWhere($column, 'LIKE', "%{$query}%");
            }

            $modelResults = $modelQuery->get();

            foreach ($modelResults as $result) {
                $filteredResult = $result->toArray();
                unset($filteredResult['id'], $filteredResult['created_at'], $filteredResult['updated_at']);
                $filteredResult['model'] = $modelName;
                $results[] = $filteredResult;
            }
        }

        return response()->json($results);
    }
}
