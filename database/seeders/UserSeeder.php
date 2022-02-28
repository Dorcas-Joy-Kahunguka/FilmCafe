<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users = [

            // Test Users
            
            ['name' => 'John Doe','email' => 'john@doe.com','password' => Hash::make('12345678')],
            ['name' => 'Jane Doe','email' => 'jane@doe.com','password' => Hash::make('87654321')],
            
        ];

        foreach ($users as $key => $user) {

            User::create($user);
            
        }

    }
}