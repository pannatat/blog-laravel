<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user); // a way to find user

        return view('profiles.index', [
            'user' => $user,
        ]);
    }

    public function edit(\App\Models\User $user) // another way with shorter code

    {
        return view('profiles.edit', compact('user')); // working the same as above
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);
        dd($data);
    }
}
