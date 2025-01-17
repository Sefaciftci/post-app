<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'Sefa Ciftci',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'), // Şifreyi hash'le
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
