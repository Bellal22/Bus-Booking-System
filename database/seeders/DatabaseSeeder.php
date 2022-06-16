<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Passenger;
use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$admin = Admin::create([
        //    'name' => 'Admin',
        //    'email' => 'admin@admin.com',
        //    'email_verified_at' => now(),
        //    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //    'remember_token' => Str::random(10),
        //]);
        //$passenger = Passenger::create([
        //    'name' => 'Passenger',
        //    'email' => 'passenger@passenger.com',
        //    'email_verified_at' => now(),
        //    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //    'remember_token' => Str::random(10),
        //]);
        // \App\Models\User::factory(100)->create();

        //$this->call(StationSeeder::class);
    }
}
