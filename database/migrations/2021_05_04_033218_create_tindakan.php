<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindakan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindakan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_periksa_poli');
            $table->foreignId('id_tindakan')->constrained('ref_tindakan');
            $table->integer('harga');
            $table->integer('jml');
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
        Schema::dropIfExists('tindakan');
    }
}
