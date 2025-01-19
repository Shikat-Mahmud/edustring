<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invest;
use Illuminate\Http\Request;

class InvestController extends Controller
{
    public function index()
    {
        $invests = Invest::all();
        return view('admin.main.invest.index', compact('invests'));
    }

    public function create()
    {
        return view('admin.main.invest.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'sector' => 'required|string',
                'name' => 'required|string|max:255',
                'amount' => 'required',
            ]);

            $invest = new Invest();
            $invest->sector = $request->sector;
            $invest->name = $request->name;
            $invest->amount = $request->amount;

            $invest->save();

            return redirect()->route('invests.index')->with('success', 'Investment added successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function show(Invest $invest)
    {
        //
    }

    public function edit(Invest $invest)
    {
        return view('admin.main.invest.edit', compact('invest'));
    }

    public function update(Request $request, Invest $invest)
    {
        try {
            $request->validate([
                'sector' => 'required|string',
                'name' => 'required|string|max:255',
                'amount' => 'required',
            ]);

            $invest->sector = $request->input('sector');
            $invest->name = $request->input('name');
            $invest->amount = $request->input('amount');

            $invest->save();

            return redirect()->route('invests.index')->with('success', 'Investment updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Invest $invest)
    {
        $invest->delete();
        return back()->with('success', 'Investment deleted successfully.');
    }
}