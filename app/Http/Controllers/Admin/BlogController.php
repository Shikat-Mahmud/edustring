<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.main.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.main.blog.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'subtitle' => 'nullable|string|max:255',
                'content' => 'required|string',
                'image' => 'required|image|mimes:jpg,jpeg,png|max:5000',
                'category' => 'required|string|max:255',
                'author' => 'required|string|max:255',
                'date' => 'required|date',
                'tag' => 'required|string',
            ]);

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('blogs', 'public');
                $validatedData['image'] = $imagePath;
            }

            Blog::create($validatedData);

            return redirect()->route('blogs.index')->with('success', 'Blog added successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessage = $e->validator->errors()->first();
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function show(Blog $blog)
    {
        return view('admin.main.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.main.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'subtitle' => 'nullable|string|max:255',
                'content' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
                'category' => 'required|string|max:255',
                'author' => 'required|string|max:255',
                'date' => 'required|date',
                'tag' => 'required|string',
                'status' => 'required',
            ]);

            if ($request->hasFile('image')) {
                if ($blog->image) {
                    Storage::disk('public')->delete($blog->image);
                }

                $imagePath = $request->file('image')->store('blogs', 'public');
                $validatedData['image'] = $imagePath;
            }

            $blog->update($validatedData);

            return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessage = $e->validator->errors()->first();
            return redirect()->back()->with('error', $errorMessage);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();
        return back()->with('success', 'Blog deleted successfully.');
    }
}
