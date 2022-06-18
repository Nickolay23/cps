<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carmodel extends Model
{
    use HasFactory;

    protected $fillable = [
        'manufacturer_id',
        'vin',
        'name',
        'generation',
        'start_year',
        'finish_year',
        'description',
        'image',
    ];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
}
