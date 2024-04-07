<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'user',
            'email' => 'user@mail.com',
            'password' => 'password123',
            'email_verified_at' => Carbon::now()
        ]);

        $user->assignRole(['USER']);
    }
}
