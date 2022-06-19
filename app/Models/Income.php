<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'pay_id',
        'income',
        'amount',
        'sum',
    ];

    public function pay(){
        return $this->hasOne(Pay::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function remains()
    {
        return $this->belongsToMany(Remain::class)->withTimestamps();
    }
}
