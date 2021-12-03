<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_main_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('Tahun');
            $table->string('TipeKamar');
            $table->integer('JumlahKamar');
            $table->integer('Biaya');
            $table->integer('LamaSewa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_main_data');
    }
}
