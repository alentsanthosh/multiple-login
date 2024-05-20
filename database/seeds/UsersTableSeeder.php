<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear existing data (optional)
        // User::truncate();

        // Generate fake users
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => 'User '.$i,
                'email' => 'user'.$i.'@example.com',
                'password' => 'password', 
            ]);
        }
    }
}
