<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderItem::updateOrCreate([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 1,
            'value' => 1000,

        ]);

    
    }
}
