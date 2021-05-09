<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_pasien')->constrained('pasien');
            $table->date('tanggal_rencana_datang');
            $table->foreignId('id_poli_bagian')->constrained('ref_poli_bagian');
            $table->foreignId('id_dokter')->constrained('dokter');
            $table->integer('int_telp');
            $table->string('status_pasien');
            $table->string('created_by');
            $table->timestamp('created_at');
            $table->string('edited_by');
            $table->timestamp('edited_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasi');
    }
}
