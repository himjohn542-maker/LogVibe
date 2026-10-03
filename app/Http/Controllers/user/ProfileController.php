<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $user = Auth::user();
    $posts = $user->posts()->orderBy('created_at', 'desc')->get();

    return view('user.profile', [
        'user'  => $user,
        'posts' => $posts   // ← This line is very important
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
{
    $user = Auth::user();

    return view('user.edit')->with([
        'user' => $user
    ]);
}

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request)
{
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login')->with('error', 'You must be logged in.');
    }

    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name'  => 'required|string|max:255',
        'email'      => 'required|email|max:255|unique:users,email,' . $user->id,
        'bio'        => 'nullable|string|max:1000',
    ]);

    $user->update([
        'first_name' => $validated['first_name'],
        'last_name'  => $validated['last_name'],
        'email'      => $validated['email'],
        'bio'        => $validated['bio'] ?? null,
    ]);

    return redirect()->route('profile.index')->with('success', 'Profile updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
