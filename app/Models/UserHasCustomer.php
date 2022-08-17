<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHasCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'customer_id'
    ];

    

    public function customer()
    {
        return $this->belongsTo(customer::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
