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
      $users =[
                    [
                        'name' => 'user1',
                        'email' => 'user1@gmail.com',
                        'password' => Hash::make('user1123'),
                        'role' => '0'
                    ],
                    [
                        'name' => 'user2',
                        'email' => 'user2@gmail.com',
                        'password' => Hash::make('user2123'),
                        'role' => '0'
                    ],
                    [
                        'name' => 'user3',
                        'email' => 'user3@gmail.com',
                        'password' => Hash::make('user3123'),
                        'role' => '0'
                    ],
                    [
                        'name' => 'user4',
                        'email' => 'user4@gmail.com',
                        'password' => Hash::make('user4123'),
                        'role' => '0'
                    ],
                    [
                        'name' => 'user5',
                        'email' => 'user5@gmail.com',
                        'password' => Hash::make('user5123'),
                       
                    ]            

        ];
         foreach($users as $user){
            User::create($user);
         }

         
    }
    }

