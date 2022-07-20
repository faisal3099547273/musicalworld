<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        //
        User::create([
        'full_name' => 'admin',
        'dob'=>'2000-10-10',
        'email' => 'admin@example.com',
        'role'=>'admin',
        'password' => Hash::make('123456'),
        'email_verified_at'=>'2022-01-02 17:04:58',
        'avatar' => 'images/avatar-1.jpg',
        'created_at' => now(),
    ]);
    User::create([
        'full_name' => 'Company',
        'dob'=>'2000-10-10',
        'email' => 'Company@example.com',
        'role'=>'company',
        'password' => Hash::make('123456'),
        'email_verified_at'=>'2022-01-02 17:04:58',
        'avatar' => 'images/avatar-1.jpg',
        'created_at' => now(),
    ]);
    User::create([
        'full_name' => 'Singer',
        'dob'=>'2000-10-10',
        'email' => 'singer@example.com',
        'role'=>'singer',
        'password' => Hash::make('123456'),
        'email_verified_at'=>'2022-01-02 17:04:58',
        'avatar' => 'images/avatar-1.jpg',
        'created_at' => now(),
    ]);

    }
}
