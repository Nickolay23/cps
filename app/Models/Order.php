<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
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
}
