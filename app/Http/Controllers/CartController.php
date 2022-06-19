<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $order = Order::find(session('orderId'));

        return view('cart.index', compact('categories', 'order'));
    }

    public function cartAdd(Sparepart $sparepart)
    {
        if (Auth::check() && Auth::user()) {
            $user_id = Auth::user()->id;
        } else {
            session()->flash('warning','Необходимо авторизоваться');
            return back();
        }

        $orderId = session('orderId');
        if (is_null($orderId)) {
            $params = ['user_id' => $user_id];
            $order = Order::create($params);
            session(['orderId' => $order->id]);
            session(['cartStatus' => 1]);
        } else {
            $order = Order::find($orderId);
            session(['cartStatus' => 1]);
        }

        if ($order->spareparts->contains($sparepart->id)) {
            $pivotSparepart = $order->spareparts()->where('sparepart_id', $sparepart->id)->first()->pivot;
            $pivotSparepart->amount++;
            $pivotSparepart->update();
        } else {
            $order->spareparts()->attach($sparepart, ['price' => $sparepart->price]);
        }


        $cartItemsCount = $order->spareparts()->count();
        session(['cartItems' => $cartItemsCount]);
        session()->flash('success','В корзину добавлено: '.$sparepart->name);

        return back()->withInput();
    }

    public function cartRemove(Sparepart $sparepart)
    {
        if (Auth::check() && Auth::user()) {
            $user_id = Auth::user()->id;
        } else {
            session()->flash('warning', __('You need login'));
            return back();
        }
        $orderId = session('orderId');

        if(is_null($orderId)) {
            return back();
        }

        $order = Order::find($orderId);
        if ($order->spareparts->contains($sparepart->id)) {
            $pivotSparepart = $order->spareparts()->where('sparepart_id', $sparepart->id)->first()->pivot;
            if($pivotSparepart->amount < 2) {
                $order->spareparts()->detach($sparepart);
            } else {
                $pivotSparepart->amount--;
                $pivotSparepart->update();
            }
        }
        if ($order->getTotalAmount() < 2) {
            session()->forget('cartStatus');
        }
        $cartItemsCount = $order->spareparts()->count();
        session(['cartItems' => $cartItemsCount]);
        session()->flash('warning', 'Из корзины удалено: '.$sparepart->name);
        return back();
    }
}
