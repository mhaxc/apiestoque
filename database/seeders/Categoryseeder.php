<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class Categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cozinha = Category::updateOrCreate([
            'name'=>'alimentos',
        ]);

        Category::updateOrCreate([
            'name'=>'bolsas',
            
        ]);

        $pets = Category::updateOrCreate([
            'name'=>'flores',
        ]);
           
        Category::updateOrCreate([
            'name'=>'computador',
            
        ]);
    }
}
