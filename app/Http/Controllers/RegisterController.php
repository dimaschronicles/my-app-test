<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required|confirmed',
        ]);

        User::create($validatedData);
        return redirect()->route('login')->with('success', 'Register Berhasil!');
    }
}
