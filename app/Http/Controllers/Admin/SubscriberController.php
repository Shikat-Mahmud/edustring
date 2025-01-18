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

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'email' => 'required|email|unique:subscribers,email|max:255',
            ]);

            Subscriber::create($validatedData);

            return back()->with('success', 'Thank You For Your Subscription!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errorMessage = $e->validator->errors()->first();
            return back()->with('error', $errorMessage);
        }
    }

    public function destroy(int $id)
    {
        Subscriber::find($id)->delete();
        return redirect()->back()->with('success', 'Subscriber deleted successfully.');
    }
}
