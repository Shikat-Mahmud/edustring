<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('admin.main.subscriber.index', compact('subscribers'));
    }

    public function destroy(string $id)
    {
        Subscriber::find($id)->delete();
        return redirect()->back()->with('success', 'Subscriber deleted successfully.');
    }
}
