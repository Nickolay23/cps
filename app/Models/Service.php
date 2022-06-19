<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
    ];

    public function spareparts()
    {
        return $this->belongsToMany(Sparepart::class);
    }

    public function works()
    {
        return $this->belongsToMany(Work::class)->withTimestamps();
    }
}
