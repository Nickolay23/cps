<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('users.index', compact('categories'));
    }

    public function cars()
    {
        $categories = Category::get();
        return view('users.cars', compact('categories'));
    }
}
