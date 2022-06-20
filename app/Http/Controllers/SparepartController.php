<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('sparepart.index', compact('categories'));
    }
}
