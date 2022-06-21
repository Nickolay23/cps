<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    public function index($id)
    {
        $categories = Category::get();
        $sparepart = Sparepart::find($id);
        $promoSpareparts = Sparepart::where('category_id', 7)->get();
        return view('sparepart.index', compact('categories', 'sparepart', 'promoSpareparts'));
    }
}
