<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::updateOrCreate([
            'name' => 'computador',
            'category_id' => '1',
            'bulk_slug' => "un",
            'quantity' => "22"

        ]);

        Product::updateOrCreate([
            'name' => 'Racão Premier',
            'category_id' => '3',
            'bulk_slug' => "KG",
            'quantity' => "10"

        ]);

        Product::updateOrCreate([
            'name' => 'Racão Golden',
            'category_id' => '3',
            'bulk_slug' => "KG",
            'quantity' => "10"

        ]);
    }
}
