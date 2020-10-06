<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {   
        return view('home', [
            'users' => User::get()
        ]);
    }

    public function show(User $user)
    {
        return view('posts', [
            'user' => $user,
            'posts' => $user->posts()->get(),
        ]);
    }
}
