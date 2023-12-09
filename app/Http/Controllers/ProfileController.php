<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['user'] = auth()->user();
        return view('profile', $data);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:user,email,' . auth()->user()->id,
        ]);

        $user = auth()->user();

        $user->full_name = $validated['full_name'];
        $user->email = $validated['email'];

        $user->save();

        return redirect()->back()->with('success', 'profile updated');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }

    public function changePassword(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'current_password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6',
            'confirm_password' => 'required|string|min:6|same:new_password'
        ]);

        if (!Hash::check($validated['current_password'], $user->password)) {
            return redirect()->back()->with('error', 'wrong current password');
        }

        $user->password = Hash::make($validated['new_password']);

        $user->save();

        return redirect()->back()->with('success', 'password changed');
    }
}