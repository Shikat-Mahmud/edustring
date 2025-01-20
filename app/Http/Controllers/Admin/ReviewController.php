<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('admin.main.review.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.main.review.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'nullable|email|max:255',
                'university' => 'required|string|max:255',
                'review' => 'required|string|max:255',
                'rating' => 'required|string|max:255',
                'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('reviews', 'public');
                $validatedData['photo'] = $photoPath;
            }

            Review::create($validatedData);

            return redirect()->route('reviews.index')->with('success', 'Review added successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessage = $e->validator->errors()->first();
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function show(Review $review)
    {
        //
    }

    public function edit(Review $review)
    {
        return view('admin.main.review.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'nullable|email|max:255',
                'university' => 'required|string|max:255',
                'review' => 'required|string|max:255',
                'rating' => 'required|string|max:255',
                'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);
    
            if ($request->hasFile('photo')) {
                if ($review->photo) {
                    Storage::disk('public')->delete($review->photo);
                }
    
                $photoPath = $request->file('photo')->store('reviews', 'public');
                $validatedData['photo'] = $photoPath;
            }
    
            $review->update($validatedData);
    
            return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessage = $e->validator->errors()->first();
            return redirect()->back()->with('error', $errorMessage);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return back()->with('success', 'Review deleted successfully.');
    }
}
