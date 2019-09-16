<?php

use Illuminate\Database\Seeder;
use \App\ref_bidang;

class ref_bidangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ref_bidang::insert
        ([
            [ "kd_urusan"=>1,  "kd_bidang"  =>1,  "nm_bidang"  =>  "Pendidikan",  "kd_fungsi"  =>  10,  "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>1,  "kd_bidang"  =>2,  "nm_bidang"  =>  "Kesehatan", "kd_fungsi"  =>  7, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>1,  "kd_bidang"  =>3,  "nm_bidang"  =>  "Pekerjaan Umum dan Penataan Ruang", "kd_fungsi"  =>  6, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>1,  "kd_bidang"  =>4,  "nm_bidang"  =>  "Perumahan Rakyat dan Kawasan Pemukiman",  "kd_fungsi"  =>  6, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>1,  "kd_bidang"  =>5,  "nm_bidang"  =>  "Ketentraman dan Ketertiban Umum serta Perlindungan Masyarakat", "kd_fungsi"  =>  3, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>1,  "kd_bidang"  =>6,  "nm_bidang"  =>  "Sosial",  "kd_fungsi"  =>  11,  "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>1,  "nm_bidang"  =>  "Tenaga Kerja",  "kd_fungsi"  =>  4, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>2,  "nm_bidang"  =>  "Pemberdayaan Perempuan dan Perlindungan Anak",  "kd_fungsi"  =>  11,  "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>3,  "nm_bidang"  =>  "Pangan",  "kd_fungsi"  =>  1, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>4,  "nm_bidang"  =>  "Pertanahan",  "kd_fungsi"  =>  5, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>5,  "nm_bidang"  =>  "Lingkungan Hidup",  "kd_fungsi"  =>  5, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>6,  "nm_bidang"  =>  "Administrasi Kependudukan dan Capil", "kd_fungsi"  =>  11,  "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>7,  "nm_bidang"  =>  "Pemberdayaan Masyarakat Desa",  "kd_fungsi"  =>  4, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>8,  "nm_bidang"  =>  "Pengendalian Penduduk dan Keluarga Berencana",  "kd_fungsi"  =>  7, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>9,  "nm_bidang"  =>  "Perhubungan", "kd_fungsi"  =>  4, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>10, "nm_bidang"  => "Komunikasi dan Informatika", "kd_fungsi"  =>  1, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>11, "nm_bidang"  => "Koperasi Usaha Kecil dan Menengah", "kd_fungsi"  =>  4, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>12, "nm_bidang"  => "Penanaman Modal",  "kd_fungsi"  =>  4, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>13, "nm_bidang"  => "Kepemudaan dan Olah Raga", "kd_fungsi"  =>  10,  "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>14, "nm_bidang"  => "Statistik",  "kd_fungsi"  =>  1, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>15, "nm_bidang"  => "Persandian", "kd_fungsi"  =>  1, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>16, "nm_bidang"  => "Kebudayaan", "kd_fungsi"  =>  8, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>17, "nm_bidang"  => "Perpustakaan", "kd_fungsi"  =>  10,  "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>2,  "kd_bidang"  =>18, "nm_bidang"  => "Kearsipan",  "kd_fungsi"  =>  1, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>3,  "kd_bidang"  =>1,  "nm_bidang"  =>  "Kelautan dan Perikanan",  "kd_fungsi"  =>  4, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>3,  "kd_bidang"  =>2,  "nm_bidang"  =>  "Pariwisata",  "kd_fungsi"  =>  8, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>3,  "kd_bidang"  =>3,  "nm_bidang"  =>  "Pertanian", "kd_fungsi"  =>  4, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>3,  "kd_bidang"  =>4,  "nm_bidang"  =>  "Kehutanan", "kd_fungsi"  =>  4, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>3,  "kd_bidang"  =>5,  "nm_bidang"  =>  "Energi dan Sumberdaya Mineral", "kd_fungsi"  =>  4, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>3,  "kd_bidang"  =>6,  "nm_bidang"  =>  "Perdagangan", "kd_fungsi"  =>  4, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>3,  "kd_bidang"  =>7,  "nm_bidang"  =>  "Perindustrian", "kd_fungsi"  =>  4, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>3,  "kd_bidang"  =>8,  "nm_bidang"  =>  "Transmigrasi",  "kd_fungsi"  =>  4, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>4,  "kd_bidang"  =>1,  "nm_bidang"  =>  "Administrasi Pemerintahan", "kd_fungsi"  =>  1, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>4,  "kd_bidang"  =>2,  "nm_bidang"  =>  "Pengawasan",  "kd_fungsi"  =>  1, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>4,  "kd_bidang"  =>3,  "nm_bidang"  =>  "Perencanaan", "kd_fungsi"  =>  1, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>4,  "kd_bidang"  =>4,  "nm_bidang"  =>  "Keuangan",  "kd_fungsi"  =>  1, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>4,  "kd_bidang"  =>5,  "nm_bidang"  =>  "Kepegawaian", "kd_fungsi"  =>  1, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>4,  "kd_bidang"  =>6,  "nm_bidang"  =>  "Pendidikan dan Pelatihan",  "kd_fungsi"  =>  1, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
            [ "kd_urusan"=>4,  "kd_bidang"  =>7,  "nm_bidang"  =>  "Penelitian dan Pengembangan", "kd_fungsi"  =>  1, "created_at"=>\Carbon\Carbon::now('Asia/Jakarta')],
        ]);
    }
}
