<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FeatureGroup;
use App\Models\Order;
use App\Models\Service;
use App\Models\Sparepart;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function category($code)
    {
        $orderId = session('orderId');
        if(!is_null($orderId)) {
            $cartProducts = Order::find($orderId)->spareparts()->count();
            session(['cartItems' => $cartProducts]);
        }

        $category = Category::where('code', $code)->first();
        $categories = Category::get();
        $spareparts = Sparepart::where('category_id', $category->id)->get();
        $services = Service::get();
        $promoSpareparts = Sparepart::where('category_id', 7)->get();
        $featureGroups = FeatureGroup::get();
        return view('categories.show', compact('category', 'categories', 'spareparts', 'services', 'promoSpareparts', 'featureGroups'));
    }
}
