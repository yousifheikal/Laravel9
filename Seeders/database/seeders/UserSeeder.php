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
     */
    public function run(): void
    {
        //
        User::truncate();

        User::create([
            'name' => 'Yousif',
            'email' => "yousifhakel50@gmail.com",
            'password' => Hash::make("01004121711")
        ]);

        User::create([
            'name' => 'Roaa',
            'email' => "roaahani33@gmail.com",
            'password' => Hash::make("01278113832")
        ]);
    }
}
