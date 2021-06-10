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
            $table->date('tanggal_rencana_datang')->nullable();
            $table->foreignId('id_poli_bagian')->constrained('ref_poli_bagian')->nullable();
            $table->foreignId('id_dokter')->constrained('dokter');
            $table->bigInteger('int_telp')->nullable();
            $table->string('status_pasien')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('edited_by')->nullable();
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
