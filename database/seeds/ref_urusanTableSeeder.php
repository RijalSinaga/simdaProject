<?php

use Illuminate\Database\Seeder;
use \App\ref_urusan;

class ref_urusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ref_urusan::insert
    ([
        ["kd_urusan"  => 1,  "nm_urusan"  => "Urusan Wajib Pelayanan Dasar"],
        ["kd_urusan"  => 2,  "nm_urusan"  => "Urusan Wajib Bukan Pelayanan Dasar"],
        ["kd_urusan"  => 3,  "nm_urusan"  => "Urusan Pilihan"],
        ["kd_urusan"  => 4,  "nm_urusan"  => "Urusan Pemerintahan Fungsi Penunjang"]
    ]);
    }
}
