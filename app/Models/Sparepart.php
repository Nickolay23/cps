<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'category_id',
        'price',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function carmodels()
    {
        return $this->belongsToMany(Carmodel::class)->withTimestamps();
    }

    public function partmanufacturers()
    {
        return $this->belongsToMany(Partmanufacturer::class)->withTimestamps();
    }
}
