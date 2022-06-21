<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sparepart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::get();
        $topSpareparts = Sparepart::limit(5)->get();
        return view('index', compact('categories', 'topSpareparts'));
    }

    public function delivery()
    {
        $categories = Category::get();
        return view('delivery', compact('categories'));
    }

    public function contact()
    {
        $categories = Category::get();
        return view('contacts', compact('categories'));
    }
}
