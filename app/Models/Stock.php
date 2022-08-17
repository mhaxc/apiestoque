<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'stock_location_id',
        'quantity',
        'lote'

    ];

   

    public function stocklocation()
    {
        return $this->belongsTo(StockLocation::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
