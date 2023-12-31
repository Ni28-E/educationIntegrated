<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => "Myself",
            'email' => "me@myself.nl",
            'password' => Hash::make("12345678"),

        ]);

        $user->assignRole('admin');

        $user = User::create([
            'name' => "Test Gebruiker",
            'email' => "test@test.nl",
            'password' => Hash::make("12345678"),
            'nationality' => 'Dutch',
            "school" => 'Windesheim',
            "school_grade" => 2,
            "dob" => '26-07-2003'
        ]);

        $user->assignRole('admin');
    }
}
