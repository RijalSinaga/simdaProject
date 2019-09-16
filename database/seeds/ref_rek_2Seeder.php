<?php

use Illuminate\Database\Seeder;
use \App\Rekening2;

class ref_rek_2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rekening2::insert
        ([
            [
                "id_ref_rek_1"=>1,
                "kd_rek_1"=>"1",
                "kd_rek_2"=>"1",
                "nm_rek_2"=>"ASET LANCAR",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "id_ref_rek_1"=>1,
                "kd_rek_1"=>"1",
                "kd_rek_2"=>"2",
                "nm_rek_2"=>"INVESTASI JANGKA PANJANG",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "id_ref_rek_1"=>1,
                "kd_rek_1"=>"1",
                "kd_rek_2"=>"3",
                "nm_rek_2"=>"ASET TETAP",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "id_ref_rek_1"=>1,
                "kd_rek_1"=>"1",
                "kd_rek_2"=>"4",
                "nm_rek_2"=>"DANA CADANGAN",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "id_ref_rek_1"=>1,
                "kd_rek_1"=>"1",
                "kd_rek_2"=>"5",
                "nm_rek_2"=>"ASET LAINNYA",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "id_ref_rek_1"=>2,
                "kd_rek_1"=>"2",
                "kd_rek_2"=>"1",
                "nm_rek_2"=>"KEWAJIBAN JANGKA PENDEK",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "id_ref_rek_1"=>2,
                "kd_rek_1"=>"2",
                "kd_rek_2"=>"2",
                "nm_rek_2"=>"KEWAJIBAN JANGKA PANJANG",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "id_ref_rek_1"=>3,
                "kd_rek_1"=>"3",
                "kd_rek_2"=>"1",
                "nm_rek_2"=>"EKUITAS DANA LANCAR",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "id_ref_rek_1"=>3,
                "kd_rek_1"=>"3",
                "kd_rek_2"=>"2",
                "nm_rek_2"=>"EKUITAS DANA INVESTASI",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "id_ref_rek_1"=>3,
                "kd_rek_1"=>"3",
                "kd_rek_2"=>"3",
                "nm_rek_2"=>"EKUITAS DANA CADANGAN",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "id_ref_rek_1"=>3,
                "kd_rek_1"=>"3",
                "kd_rek_2"=>"4",
                "nm_rek_2"=>"KOREKSI EKUITAS",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "id_ref_rek_1"=>4,
                "kd_rek_1"=>"4",
                "kd_rek_2"=>"1",
                "nm_rek_2"=>"PENDAPATAN ASLI DAERAH",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [ 
                "id_ref_rek_1"=>4,
                "kd_rek_1"=>"4",
                "kd_rek_2"=>"2",
                "nm_rek_2"=>"DANA PERIMBANGAN",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                "id_ref_rek_1"=>4,
                "kd_rek_1"=>"4",
                "kd_rek_2"=>"3",
                "nm_rek_2"=>"LAIN-LAIN PENDAPATAN DAERAH YANG SAH",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [ 
                "id_ref_rek_1"=>5,
                "kd_rek_1"=>"5",
                "kd_rek_2"=>"1",
                "nm_rek_2"=>"BELANJA TIDAK LANGSUNG",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [ 
                "id_ref_rek_1"=>5,
                "kd_rek_1"=>"5",
                "kd_rek_2"=>"2",
                "nm_rek_2"=>"BELANJA LANGSUNG",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [ 
                "id_ref_rek_1"=>6,
                "kd_rek_1"=>"6",
                "kd_rek_2"=>"1",
                "nm_rek_2"=>"PENERIMAAN PEMBIAYAAN DAERAH",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [ 
                "id_ref_rek_1"=>6,
                "kd_rek_1"=>"6",
                "kd_rek_2"=>"2",
                "nm_rek_2"=>"PENGELUARAN PEMBIAYAAN DAERAH",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [ 
                "id_ref_rek_1"=>6,
                "kd_rek_1"=>"6",
                "kd_rek_2"=>"3",
                "nm_rek_2"=>"PEMBIAYAAN NETTO",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [ 
                "id_ref_rek_1"=>6,
                "kd_rek_1"=>"6",
                "kd_rek_2"=>"4",
                "nm_rek_2"=>"SISA LEBIH/KURANG PEMBIAYAAN TAHUN BERKENAAN",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [ 
                "id_ref_rek_1"=>7,
                "kd_rek_1"=>"7",
                "kd_rek_2"=>"1",
                "nm_rek_2"=>"PENERIMAAN PERHITUNGAN FIHAK KETIGA (PFK)",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
            [ 
                "id_ref_rek_1"=>7,
                "kd_rek_1"=>"7",
                "kd_rek_2"=>"2",
                "nm_rek_2"=>"PENGELUARAN PERHITUNGAN FIHAK KETIGA (PFK)",
                "created_at"=>\Carbon\Carbon::now('Asia/Jakarta'),
                "updated_at"=>\Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
    }
}
