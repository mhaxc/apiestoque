<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name'=> 'Maxwel filipes da  Silva',
            'email' => 'mhaxcorp@gmail.com',
            'password' => 't33l3908&',

        ]);
    }
}
