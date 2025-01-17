<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->integer('age'); 
            $table->text('tgl_cek')->nullable();
            $table->text('t_vital')->nullable();
            $table->text('ctt_obat')->nullable();
            $table->text('keluhan')->nullable();
            $table->text('ctt_pas')->nullable();
            $table->text('anamnesa')->nullable();
            $table->text('resep')->nullable();
            $table->text('hsl_lab')->nullable();
            $table->string('foto_mri')->nullable();
            $table->string('foto_ctscan')->nullable();
            $table->string('foto_usg')->nullable();
            //$table->text('medical_records')->nullable(); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
        
    }
};
