<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativeUnit extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'bulk_slug',
        'quantity',
        'divide_or_multiply'

    ];

 

    public function alternativeunit()
    {
        return $this->belongsTo(AlternativeUnit::class);
    }

    public function bulk()
    {
        return $this->belongsTo(Bulk::class);
    }
}
