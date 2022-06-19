<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'feature_group_id',
        'name',
    ];

    public function featureGroup()
    {
        return $this->belongsTo(FeatureGroup::class);
    }

    public function spareparts()
    {
        return $this->belongsToMany(Sparepart::class);
    }
}
