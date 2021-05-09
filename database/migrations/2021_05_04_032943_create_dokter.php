<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->foreignId('id_poli_bagian')->constrained('ref_poli_bagian');
            $table->integer('no_telp');
            $table->integer('harga');
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
        Schema::dropIfExists('dokter');
    }
}
