<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        $users=[
            [
                'name' => 'Admin',
                'age' => rand(17, 100),
                'sex'=> rand(0, 1),
                'phone' => rand(1000000000, 9999999999),
                'administrador' => 1,
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Jhorman',
                'age' => rand(17, 100),
                'sex'=> rand(0, 1),
                'phone' => rand(1000000000, 9999999999),
                'administrador' => 0,
                'email' => 'j@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('1234'),
                'remember_token' => Str::random(10),
            ],
        ];
        DB::table('users')->insert($users);
        \App\Models\User::factory(5)->create();
    }
}
