<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            super_admin_seeder::class,
            // Add more seeders here if needed
        ]);
    }
}
