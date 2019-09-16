<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ref_rek_1Seeder::class);
        $this->call(ref_rek_2Seeder::class);
        $this->call(ref_rek_3Seeder::class);
        $this->call(ref_rek_4Seeder::class);
        $this->call(ref_rek_5Seeder::class);
        
        $this->call(ref_urusanTableSeeder::class);
    }
}
