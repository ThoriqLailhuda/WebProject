<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBhp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bhp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_bhp')->constrained('ref_bhp');
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
        Schema::dropIfExists('bhp');
    }
}
