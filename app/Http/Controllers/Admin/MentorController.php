<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::all();
        return view('admin.main.mentor.index', compact('mentors'));
    }

    public function create()
    {
        return view('admin.main.mentor.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'position' => 'required|string|max:255',
                'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'fb_link' => 'nullable|string|max:255',
                'insta_link' => 'nullable|string|max:255',
                'linkedin_link' => 'nullable|string|max:255',
            ]);

            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('mentors', 'public');
                $validatedData['photo'] = $photoPath;
            }

            Mentor::create($validatedData);

            return redirect()->route('mentors.index')->with('success', 'Mentor added successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessage = $e->validator->errors()->first();
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function show(Mentor $mentor)
    {
        //
    }

    public function edit(Mentor $mentor)
    {
        return view('admin.main.mentor.edit', compact('mentor'));
    }

    public function update(Request $request, Mentor $mentor)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'position' => 'required|string|max:255',
                'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'fb_link' => 'nullable|string|max:255',
                'insta_link' => 'nullable|string|max:255',
                'linkedin_link' => 'nullable|string|max:255',
            ]);
    
            if ($request->hasFile('photo')) {
                if ($mentor->photo) {
                    Storage::disk('public')->delete($mentor->photo);
                }
    
                $photoPath = $request->file('photo')->store('mentors', 'public');
                $validatedData['photo'] = $photoPath;
            }
    
            $mentor->update($validatedData);
    
            return redirect()->route('mentors.index')->with('success', 'Mentor updated successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessage = $e->validator->errors()->first();
            return redirect()->back()->with('error', $errorMessage);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function destroy(Mentor $mentor)
    {
        $mentor->delete();
        return back()->with('success', 'Mentor deleted successfully.');
    }
}
