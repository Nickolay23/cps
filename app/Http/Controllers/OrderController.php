<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('order.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::get();
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('order.create', compact('categories', 'order'));
    }

    public function confirm(OrderRequest $request){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }

        $order = Order::find($orderId);
        $success = $order->saveOrder($request);
        if($success) {
            session()->forget('orderId');
            session()->forget('cartStatus');
            session()->forget('cartItems');
            session()->flash('success', 'Ваш заказ принят в обработку');
        } else {
            session()->flash('warning', 'Произошла ошибка');
        }
        return redirect()->route('index');

    }

}
