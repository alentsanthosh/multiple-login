<?php

use Illuminate\Database\Seeder;
use App\Distributor;

class DistributorsTableSeeder extends Seeder
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
            Distributor::create([
                'name' => 'Distributor '.$i,
                'email' => 'distributor'.$i.'@example.com',
                'password' => Hash::make('distributorpassword'), 
            ]);
        }
    }
}
