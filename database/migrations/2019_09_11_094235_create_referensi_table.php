<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferensiTable extends Migration
{
    public function up()
    {
        
        Schema::create('ref_tahun', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('tahun');
            $table->timestamps();
        });
        
        Schema::create('ref_rek_1', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('kd_rek_1')->unique();
            $table->string('nm_rek_1');
            $table->timestamps();
        });

        Schema::create('ref_rek_2', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ref_rek_1')->nullable();
            $table->string('kd_rek_1')->index();
            $table->string('kd_rek_2')->unique();
            $table->string('nm_rek_2');
            $table->foreign('id_ref_rek_1')->references('id')->on('ref_rek_1');
            $table->timestamps();
        });

        Schema::create('ref_rek_3', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedinteger('id_ref_rek_2')->nullable();
            $table->integer('kd_rek_1')->index();
            $table->integer('kd_rek_2')->index();
            $table->integer('kd_rek_3')->unique();
            $table->string('nm_rek_3');
            $table->foreign('id_ref_rek_2')->references('id')->on('ref_rek_2');
            $table->timestamps();
        });

        Schema::create('ref_rek_4', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ref_rek_3')->nullable();
            $table->integer('kd_rek_1')->index();
            $table->integer('kd_rek_2')->index();
            $table->integer('kd_rek_3')->index();
            $table->integer('kd_rek_4')->unique();
            $table->string('nm_rek_4');
            $table->foreign('id_ref_rek_3')->references('id')->on('ref_rek_3');
            $table->timestamps();
        });

        Schema::create('ref_rek_5', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ref_rek_4')->nullable();
            $table->integer('kd_rek_1')->index();
            $table->integer('kd_rek_2')->index();
            $table->integer('kd_rek_3')->index();
            $table->integer('kd_rek_4')->index();
            $table->integer('kd_rek_5')->unique();
            $table->string('nm_rek_5');
            $table->foreign('id_ref_rek_4')->references('id')->on('ref_rek_4');
            $table->timestamps();
        });
        
        Schema::create('ref_editdata', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nm_edit');
            $table->timestamps();
        });

        Schema::create('ref_urusan', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('kd_urusan');
            $table->string('nm_urusan');
            $table->timestamps();
        });
               
        Schema::create('ref_bidang', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ref_urusan')->nullable();
            $table->integer('kd_urusan');
            $table->integer('kd_bidang');
            $table->string('nm_bidang');
            $table->integer('kd_fungsi');
            $table->foreign('id_ref_urusan')->references('id')->on('ref_urusan');
            $table->timestamps();
        });
            
        Schema::create('ref_program', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ref_urusan')->nullable();
            $table->integer('kd_urusan');
            $table->integer('kd_bidang');
            $table->integer('kd_prog');
            $table->string('ket_program');
            $table->foreign('id_ref_urusan')->references('id')->on('ref_urusan');
            $table->timestamps();
        });
        
        Schema::create('ref_kegiatan', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ref_program')->nullable();
            $table->unsignedInteger('id_ref_bidang')->nullable();
            $table->integer('kd_urusan');
            $table->integer('kd_bidang');
            $table->integer('kd_prog');
            $table->integer('kd_keg');
            $table->string('ket_kegiatan');
            $table->foreign('id_ref_program')->references('id')->on('ref_program');
            $table->foreign('id_ref_bidang')->references('id')->on('ref_bidang');
            $table->timestamps();
        });
        
        Schema::create('ref_sumber_dana', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('kd_sumber');
            $table->integer('nm_sumber');
            $table->timestamps();
        });

        Schema::create('ta_kegiatan', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ref_tahun')->nullable();
            $table->unsignedInteger('id_ref_sumber_dana')->nullable();
            $table->integer('tahun');
            $table->integer('kd_urusan');
            $table->integer('kd_bidang');
            $table->integer('kd_unit');
            $table->integer('kd_prog');
            $table->integer('id_prog');
            $table->integer('kd_keg');
            $table->string('ket_kegiatan');
            $table->string('lokasi');
            $table->string('kelompok_sasaran');
            $table->string('satatus_kegiatan');
            $table->string('pagu_anggaran');
            $table->string('waktu_pelaksanaan');
            $table->integer('kd_sumber');
            $table->foreign('id_ref_tahun')->references('id')->on('ref_tahun');
            $table->foreign('id_ref_sumber_dana')->references('id')->on('ref_sumber_dana');
            $table->timestamps();
        });
         
        Schema::create('ref_unit', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ref_bidang')->nullable();
            $table->integer('kd_urusan');
            $table->integer('kd_bidang');
            $table->integer('kd_unit');
            $table->string('nm_unit');
            $table->foreign('id_ref_bidang')->references('id')->on('ref_bidang');
            $table->timestamps();
        });
        
        Schema::create('ref_sub_unit', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ref_unit')->nullable();
            $table->integer('kd_urusan');
            $table->integer('kd_bidang');
            $table->integer('kd_unit');
            $table->integer('kd_sub');
            $table->string('nm_sub_unit');
            $table->foreign('id_ref_unit')->references('id')->on('ref_unit');
            $table->timestamps();
        });

        Schema::create('ta_sub_unit', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ref_sub_unit')->nullable();
            $table->integer('tahun');
            $table->integer('kd_urusan');
            $table->integer('kd_bidang');
            $table->integer('kd_unit');
            $table->integer('kd_sub');
            $table->string('nm_pimpinan');
            $table->integer('nip_pimpinan');
            $table->string('jbt_pimpinan');
            $table->string('alamat');
            $table->string('ur_visi');
            $table->foreign('id_ref_sub_unit')->references('id')->on('ref_sub_unit');
            $table->timestamps();
        });

        Schema::create('ta_spd', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedinteger('id_ref_editdata')->nullable();
            $table->unsignedinteger('id_ta_sub_unit')->nullable();
            $table->integer('tahun');
            $table->integer('no_spd');
            $table->integer('kd_urusan');
            $table->integer('kd_bidang');
            $table->integer('kd_unit');
            $table->integer('kd_sub');
            $table->integer('tgl_spd');
            $table->string('nama_pptk');
            $table->integer('nip_pptk');
            $table->string('uraian');
            $table->string('nm_penandatangan');
            $table->integer('nip_penandatagan');
            $table->string('jbt_penandatangan');
            $table->integer('kd_edit');
            $table->foreign('id_ref_editdata')->references('id')->on('ref_editdata');
            $table->foreign('id_ta_sub_unit')->references('id')->on('ta_sub_unit');
            $table->timestamps();
        });

        Schema::create('ta_spd_rinc', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ref_rek_5')->nullable();
            $table->unsignedInteger('id_ta_kegiatan')->nullable();
            $table->unsignedInteger('id_ta_spd')->nullable();
            $table->integer('tahun');
            $table->integer('no_spd');
            $table->integer('no_id');
            $table->integer('kd_urusan');
            $table->integer('kd_bidang');
            $table->integer('kd_unit');
            $table->integer('kd_sub');
            $table->integer('kd_prog');
            $table->integer('id_prog');
            $table->integer('kd_keg');
            $table->integer('kd_rek_1');
            $table->integer('kd_rek_2');
            $table->integer('kd_rek_3');
            $table->integer('kd_rek_4');
            $table->integer('kd_rek_5');
            $table->integer('nilai');
            $table->foreign('id_ref_rek_5')->references('id')->on('ref_rek_5');
            $table->foreign('id_ta_kegiatan')->references('id')->on('ta_kegiatan');
            $table->foreign('id_ta_spd')->references('id')->on('ta_spd');
            $table->timestamps();
        });      
        
        Schema::create('ref_entry', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ta_sub_unit')->nullable();
            $table->integer('tahun');
            $table->integer('kd_urusan');
            $table->integer('kd_bidang');
            $table->integer('kd_unit');
            $table->integer('kd_sub');
            $table->integer('kd_penandatangan');
            $table->string('nm_penandatangan');
            $table->integer('nip_penandatangan');
            $table->string('jbt_penandatangan');
            $table->string('jns_dokumen');
            $table->foreign('id_ta_sub_unit')->references('id')->on('ta_sub_unit');
            $table->timestamps();
        });

        Schema::create('ta_dask', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ta_sub_unit')->nullable();
            $table->integer('tahun');
            $table->integer('kd_urusan');
            $table->integer('kd_bidang');
            $table->integer('kd_unit');
            $table->integer('kd_sub');
            $table->integer('no_dpa');
            $table->string('tgl_dpa');
            $table->integer('no_-dppa');
            $table->string('tgl_dppa');
            $table->foreign('id_ta_sub_unit')->references('id')->on('ta_sub_unit');
            $table->timestamps();
        });
        
    }
    


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_rek_1');
        Schema::dropIfExists('ref_rek_2');
        Schema::dropIfExists('ref_rek_4');
        Schema::dropIfExists('ref_rek_3');
        Schema::dropIfExists('ref_rek_5');
        Schema::dropIfExists('ref_entry');
        Schema::dropIfExists('ref_editdata');
        Schema::dropIfExists('ta_spd_rinc');
        Schema::dropIfExists('ta_spd');
        Schema::dropIfExists('ta_dask');
        Schema::dropIfExists('ref_urusan');
        Schema::dropIfExists('ref_program');
        Schema::dropIfExists('ta_kegiatan');
        Schema::dropIfExists('ref_kegiatan');
        Schema::dropIfExists('ref_bidang');
        Schema::dropIfExists('ref_unit');
        Schema::dropIfExists('ref_sub_unit');
        Schema::dropIfExists('ta_sub_unit');
        Schema::dropIfExists('ta_tahun');
        Schema::dropIfExists('ref_sumber_dana');
    }
}
