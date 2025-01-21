<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
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
        
        return view("public.pages.home", compact('reviews', 'galleries', 'mentors', 'partners'));
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

    public function blogs()
    {
        return view("public.pages.blogs");
    }

    public function blogDetails()
    {
        return view("public.pages.blog_details");
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
}
