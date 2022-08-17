<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
      
        'number',
        'date',
        'observation',
       

    ];

    protected $table = 'orders';

    protected $appends = [
        'total_order'
    ];

    public function getTotalOrderAttribute()
    {

        return $this->items
            ->reduce(function (int $valor, OrderItem $item_Linha) {
                return $valor = $valor + ($item_Linha->value * $item_Linha->quantity);
            }, 0);
    }




    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function payment()
    {
        return $this->belongsTo(TypePayment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
