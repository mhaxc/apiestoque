<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Customerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::updateOrCreate([
            'name' => 'maxwel filipes',
            'document' => '12829819780',
            'email' => 'mhaxcorp@gmail.com',
            'postal_code' => '29167168'
        ]);
    }
}
