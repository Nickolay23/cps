<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pay_id',
        'invoice',
        'address',
        'quantity',
        'sum',
    ];

    public function spareparts()
    {
        return $this->belongsToMany(Sparepart::class)->withPivot('amount', 'price')->withTimestamps();
    }

    public function pay(){
        return $this->hasOne(Pay::class);
    }

    public function outcome(){
        return $this->hasOne(Outcome::class);
    }

    public function getTotalAmount()
    {
        $sum = 0;
        foreach ($this->spareparts as $sparepart) {
            $sum += $sparepart->pivot->amount;
        }
        return $sum;
    }

    public function getTotalCost()
    {
        $sum = 0;
        foreach ($this->spareparts as $sparepart) {
            $sum += $sparepart->sparepartCost();
        }
        return $sum;
    }

    public function saveOrder($request)
    {
        if($this->invoice == 0){
            $randomValue = random_int(100000, 999999);
            $this->address = $request->address;
            $this->invoice = 'СФ-' . session('orderId') . $randomValue . '-' . $this->getTotalAmount();
            $this->quantity = $this->getTotalAmount();
            $this->sum = $this->getTotalCost();
            $this->save();
            return true;
        }
        else{
            return false;
        }
    }
}
