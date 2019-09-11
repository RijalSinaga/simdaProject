<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferensiTable extends Migration
{
    public function up()
    {
        Schema::create('ref_rek_1', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('kd_rek_1')->unique();
            $table->integer('nm_rek_1');
            $table->timestamps();
        });

        Schema::create('ref_rek_2', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_ref_rek_1')->nullable();
            $table->string('kd_rek_1')->index();
            $table->string('kd_rek_2')->unique();
            $table->string('nm_rek_2');
            $table->foreign('id_ref_rek_1')->references('id')->on('ref_rek_1')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('ref_rek_3', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedinteger('id_ref_rek_2')->nullable();
            $table->integer('kd_rek_1')->index();
            $table->integer('kd_rek_2')->index();
            $table->integer('kd_rek_3')->unique();
            $table->string('nm_rek_3');
            $table->foreign('id_ref_rek_2')->references('id')->on('ref_rek_2')->onDelete('cascade');
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
            $table->foreign('id_ref_rek_3')->references('id')->on('ref_rek_3')->onDelete('cascade');
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
            $table->foreign('id_ref_rek_4')->references('id')->on('ref_rek_4')->onDelete('cascade');
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
    }
}
