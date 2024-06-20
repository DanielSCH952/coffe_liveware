<?php

namespace Database\Seeders;

use App\Models\StoreEmployee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User();
        $user1->name = fake()->name();
        $user1->email = 'admin@dev.com';
        $user1->password = Hash::make('password');
        $user1->rol_id = 1;
        $user1->email_verified_at = now();
        $user1->remember_token = Str::random(10);
        $user1->save();

        $user1 = new User();
        $user1->name = fake()->name();
        $user1->email = fake()->unique()->safeEmail();
        $user1->password = Hash::make('password');
        $user1->rol_id = 1;
        $user1->email_verified_at = now();
        $user1->remember_token = Str::random(10);
        $user1->save();
    }
}
