<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("public.pages.home");
    }

    public function about()
    {
        return view("public.pages.about");
    }

    public function contact()
    {
        return view("public.pages.contact");
    }

    public function gallery()
    {
        return view("public.pages.gallery");
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
