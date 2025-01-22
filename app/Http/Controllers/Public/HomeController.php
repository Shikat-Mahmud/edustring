<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Mentor;
use App\Models\Partner;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        $galleries = Gallery::latest()->get();
        $mentors = Mentor::all();
        $partners = Partner::all();
        $blogs = Blog::where('status', 1)->latest()->limit(3)->get();

        return view("public.pages.home", compact('reviews', 'galleries', 'mentors', 'partners', 'blogs'));
    }

    public function about()
    {
        return view("public.pages.about");
    }

    public function contact()
    {
        return view("public.pages.contact");
    }

    public function apply()
    {
        return view("public.pages.apply");
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->get();
        return view("public.pages.gallery", compact("galleries"));
    }

    public function ourBlogs()
    {
        $blogs = Blog::where('status', 1)->latest()->paginate(6);
        return view("public.pages.blogs", compact("blogs"));
    }

    public function blogDetails(int $id)
    {
        $blog = Blog::find($id);
        $relatedBlogs = Blog::where("category", $blog->category)
            ->whereNot("id", $id)
            ->latest()
            ->limit(3)
            ->get();
        // $relatedBlogs = Blog::where("category", 'like', "%{$blog->category}%")
        //     ->whereNot("id", $id)
        //     ->latest()
        //     ->limit(3)
        //     ->get();

        return view("public.pages.blog_details", compact('blog', 'relatedBlogs'));
    }

    public function studyUk()
    {
        return view("public.pages.study_uk");
    }

    public function studyIndia()
    {
        return view("public.pages.study_india");
    }

    public function studyChina()
    {
        return view("public.pages.study_china");
    }

    public function storeApplication(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'nullable|string|max:255',
                'phone' => 'required|string|max:15',
                'whatsapp' => 'nullable|string|max:15',
                'email' => 'nullable|email|max:255',
                'program' => 'required|string|max:255',
                'country' => 'nullable|string|max:255',
                'subject' => 'nullable|string|max:255',
                'address' => 'nullable|string|max:255',
                'amount' => 'nullable|string|max:255',
                'status' => 'nullable|string|max:255',
                'other' => 'nullable|string',
                'photo' => 'nullable|image|mimes:jpg,jpeg,png',
            ]);

            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('applications', 'public');
                $validatedData['photo'] = $photoPath;
            }

            Application::create($validatedData);

            return redirect()->back()->with('success', 'Application submitted successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessage = $e->validator->errors()->first();
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function storeContact(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'nullable|email|max:255',
                'phone' => 'required|string|max:15',
                'message' => 'nullable|string|max:1000',
            ]);

            Contact::create($validatedData);

            return redirect()->back()->with('success', 'Message sent successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessage = $e->validator->errors()->first();
            return redirect()->back()->with('error', $errorMessage);
        }
    }
}
