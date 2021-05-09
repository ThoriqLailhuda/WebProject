<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefPoliBagian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_poli_bagian', function (Blueprint $table) {
            $table-> bigIncrements('id');
            $table-> string('nama');
            $table-> integer('harga_pendaftaran');
            $table-> foreignId('id_user')->constrained('users');
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
        Schema::dropIfExists('ref_poli_bagian');
    }
}
