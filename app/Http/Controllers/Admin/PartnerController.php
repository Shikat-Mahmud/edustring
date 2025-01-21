<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.main.partner.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.main.partner.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'company_name' => 'required|string|max:255',
                'company_logo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'company_url' => 'nullable|url|max:255',
            ]);

            if ($request->hasFile('company_logo')) {
                $logoPath = $request->file('company_logo')->store('partners', 'public');
                $validatedData['company_logo'] = $logoPath;
            }

            Partner::create($validatedData);

            return redirect()->route('partners.index')->with('success', 'Partner added successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessage = $e->validator->errors()->first();
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function show(Partner $partner)
    {
        //
    }

    public function edit(Partner $partner)
    {
        return view('admin.main.partner.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        try {
            $validatedData = $request->validate([
                'company_name' => 'required|string|max:255',
                'company_logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'company_url' => 'nullable|url|max:255',
            ]);

            if ($request->hasFile('company_logo')) {
                if ($partner->company_logo) {
                    Storage::disk('public')->delete($partner->company_logo);
                }

                $logoPath = $request->file('company_logo')->store('partners', 'public');
                $validatedData['company_logo'] = $logoPath;
            }

            $partner->update($validatedData);

            return redirect()->route('partners.index')->with('success', 'Partner updated successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessage = $e->validator->errors()->first();
            return redirect()->back()->with('error', $errorMessage);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function destroy(Partner $partner)
    {
        if ($partner->company_logo) {
            Storage::disk('public')->delete($partner->company_logo);
        }

        $partner->delete();

        return back()->with('success', 'Partner deleted successfully.');
    }
}
