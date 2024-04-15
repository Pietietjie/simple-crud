<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    /**
     * seeds user to test with
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'test@example.com',
        ], [
            'name' => 'test',
            'password' => Hash::make('test'),
        ]);
    }
}
