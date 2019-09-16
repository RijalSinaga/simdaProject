<?php

use Illuminate\Database\Seeder;
use \App\ref_rek_1;

class ref_rek_1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ref_rek_1::insert
        ([
            [
                'kd_rek_1'=>'1',
                'nm_rek_1'=>'ASSET',
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'kd_rek_1'=>'2',
                'nm_rek_1'=>'KEWAJIBAN',
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'kd_rek_1'=>'3',
                'nm_rek_1'=>'EKUITAS DANA',
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'kd_rek_1'=>'4',
                'nm_rek_1'=>'PENDAPATAN',
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'kd_rek_1'=>'5',
                'nm_rek_1'=>'BELANJA',
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'kd_rek_1'=>'6',
                'nm_rek_1'=>'PEMBIAYAAN DAERAH',
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'kd_rek_1'=>'7',
                'nm_rek_1'=>'PERHITUNGAN PIHAK KETIGA (PPK)',
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);

    }
}
