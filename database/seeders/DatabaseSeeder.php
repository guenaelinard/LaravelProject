<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for ($i = 0; $i < 50; $i++) {
            DB::table('users')->insert([
                'name' => fake()->name,
                'email' => fake()->safeEmail,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'email_verified_at' => fake()->dateTime(),
            ]);
        }
    }
}
