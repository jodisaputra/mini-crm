<?php

namespace Database\Seeders;

use App\Models\User;
use App\RoleEnum;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
           RoleSeeder::class
        ]);
         User::factory(10)->create();
         User::factory()->create([
             'first_name' => 'Administrator',
             'last_name' => 'admin',
             'email' => 'admin@admin.com',
             'password' => Hash::make('password')
         ])->syncRoles([RoleEnum::ADMIN]);
    }
}
