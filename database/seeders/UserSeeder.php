<?php

namespace Database\Seeders;

use App\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::factory()->create([
            'first_name' => 'Administrator',
            'last_name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ])->syncRoles([RoleEnum::ADMIN]);
    }
}
