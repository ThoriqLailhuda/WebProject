<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjungan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan', function (Blueprint $table) {
            $table-> bigIncrements('id');
            $table-> foreignId('id_reservasi')->constrained('reservasi');
            $table-> foreignId('id_pasien')->constrained('pasien');
            $table-> foreignId('id_penyakit')->constrained('ref_penyakit_icd');
            $table-> string('tekanan_darah');
            $table-> integer('denyut_nadi');
            $table-> integer('usia_bulan');
            $table-> integer('usia_hari');
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
        Schema::dropIfExists('kunjungan');
    }
}
