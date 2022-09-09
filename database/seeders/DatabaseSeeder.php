<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $data = array(
            [
                'username' => 'User',
                'email' => 'user@tes.com',
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password' => Hash::make('password'),
                'level' => "User",
            ],
            [
                'username' => 'Gardener',
                'email' => 'gardener@tes.com',
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password' => Hash::make('password'),
                'level' => "Gardener",
            ],
            [
                'username' => 'Designer',
                'email' => 'designer@tes.com',
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password' => Hash::make('password'),
                'level' => "Designer",
            ],
        );
        foreach($data AS $d){
            User::create([
                'username' => $d['username'],
                'email' => $d['email'],
                'email_verified_at' => $d['email_verified_at'],
                'password' => $d['password'],
                'level' => $d['level']
            ]);
        }
    }
}