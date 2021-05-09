<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjunganPoli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan_poli', function (Blueprint $table) {
            $table-> bigIncrements('id');
            $table-> integer('id_periksa');
            $table-> integer('biaya_pendaftaran');
            $table-> foreignId('id_poli_bagian')->constrained('ref_poli_bagian');
            $table-> foreignId('id_dokter_pemeriksa')->constrained('dokter');
            $table-> foreignId('id_perawat_pemeriksa')->constrained('perawat');
            $table-> foreignId('id_penyakit')->constrained('ref_penyakit_icd');
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
        Schema::dropIfExists('kunjungan_poli');
    }
}
