<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $user_id = Auth::user()->id;
        $orders = Order::where('user_id',$user_id)->get();
        return view('order.index', compact('categories', 'orders'));
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
