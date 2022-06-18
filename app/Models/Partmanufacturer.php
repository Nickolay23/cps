<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partmanufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'part_manufacturer',
        'description',
        'image',
    ];

    public function spareparts()
    {
        return $this->belongsToMany(Sparepart::class);
    }
}
