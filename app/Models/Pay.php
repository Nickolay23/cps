<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_id',
        'document_number',
        'sum',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function income()
    {
        return $this->belongsTo(Income::class);
    }

    public function document()
    {
        return $this->belongsTo(Documents::class);
    }


}
