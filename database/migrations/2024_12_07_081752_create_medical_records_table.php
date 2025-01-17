<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->date('tgl_cek');
           

            $table->text('t_vital');
            $table->text('ctt_obat')->nullable();
            $table->text('keluhan');
            $table->text('ctt_pasien')->nullable();

            $table->text('anamnesa');
            $table->text('resep');
            $table->text('hsl_lab');
            $table->string('foto_mri')->nullable();
            $table->string('foto_ctscan')->nullable();
            $table->string('foto_usg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_records');
    }
};
