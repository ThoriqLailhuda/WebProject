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
            $table->bigInteger('no_rm');
            $table->bigInteger('nik');
            $table->text('alamat');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->bigInteger('rt');
            $table->bigInteger('rw');
            $table->bigInteger('id_kelurahan');
            $table->bigInteger('id_kecamatan');
            $table->bigInteger('id_kabupaten');
            $table->bigInteger('id_provinsi');
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
