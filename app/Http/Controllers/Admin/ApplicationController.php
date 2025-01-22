<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();
        return view('admin.main.application.index', compact('applications'));
    }

    public function create()
    {
        return view('admin.main.application.create');
    }

    public function store(Request $request)
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

            return redirect()->route('applications.index')->with('success', 'Application submitted successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessage = $e->validator->errors()->first();
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function show(int $id)
    {
        $student = Application::findOrFail($id);
        return view('admin.main.application.show', compact('student'));
    }

    public function edit(Application $application)
    {
        return view('admin.main.application.edit', compact('application'));
    }


    public function update(Request $request, Application $application)
    {
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
            if ($application->photo) {
                Storage::disk('public')->delete($application->photo);
            }

            $photoPath = $request->file('photo')->store('applications', 'public');
            $validatedData['photo'] = $photoPath;
        }

        $application->update($validatedData);

        return redirect()->route('applications.index')->with('success', 'Application updated successfully.');
    }

    public function destroy(Application $application)
    {
        $application->delete();
        return redirect()->back()->with('success', 'Application deleted successfully.');
    }
}
