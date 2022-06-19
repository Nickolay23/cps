<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remain extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
    ];

    public function sparepart()
    {
        return $this->belongsTo(Sparepart::class);
    }

    public function incomes()
    {
        return $this->belongsToMany(Income::class);
    }

    public function outcomes()
    {
        return $this->belongsToMany(Outcome::class);
    }
}
