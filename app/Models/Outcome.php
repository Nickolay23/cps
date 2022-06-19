<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'outcome',
        'amount',
        'sum',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function remains()
    {
        return $this->belongsToMany(Remain::class)->withTimestamps();
    }

}
