<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('no_rm');
            $table->integer('nik');
            $table->text('Alamat');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('id_kelurahan');
            $table->integer('id_kecamatan');
            $table->integer('id_kabupaten');
            $table->integer('id_provinsi');
            $table->foreignId('id_user')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_pasien');
    }
}
