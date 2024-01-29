<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Region;
use Illuminate\Support\Facades\Hash;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        Region::insert([
            [
                'name' => 'طرابلس'
            ],
            [
                'name' => 'مصراته'
            ],
            [
                'name' => 'بنغازي'
            ]
        ]);


        User::insert([
            [
                'name' => 'Mohamed',
                'email' => 'mohamed@gmail.com',
                'phone' => '1234567890',
                'password' => Hash::make('password1'),
                'region_id' => 1,
            ],
            [
                'name' => 'Ahmed',
                'email' => 'ahmed@gmail.com',
                'phone' => '0987654321',
                'password' => Hash::make('password2'),
                'region_id' => null,
            ],
            [
                'name' => 'Ali',
                'email' => 'aya@gmail.com',
                'phone' => '1122334455',
                'password' => Hash::make('password3'),
                'region_id' => null,
            ],
            [
                'name' => 'Ali',
                'email' => 'ali@gmail.com',
                'phone' => '2233445566',
                'password' => Hash::make('password4'),
                'region_id' => null,
            ],
            [
                'name' => 'Nesreen',
                'email' => 'nesreen@gmail.com',
                'phone' => '3344556677',
                'password' => Hash::make('password5'),
                'region_id' => null,
            ],
            [
                'name' => 'Mahmoud',
                'email' => 'mahmoud@gmail.com',
                'phone' => '4455667788',
                'password' => Hash::make('password6'),
                'region_id' => 2,
            ],
        ]);
    }
}
