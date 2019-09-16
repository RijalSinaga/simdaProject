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
        $this->call(ref_rek_1Seeder::class);
        $this->call(ref_rek_2Seeder::class);
        $this->call(ref_rek_3Seeder::class);
    }
}
