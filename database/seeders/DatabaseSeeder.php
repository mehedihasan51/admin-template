<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
          [  'id'=>1,
           'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'status' => 'active',
            'remember_token' => null,
        ],
        [
            'id'=>2,
           'name' => 'user',
            'email' => 'user@user.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'role' => 'user',
            'status' => 'active',
            'remember_token' => null,
            ],
        ]);
    }
}
