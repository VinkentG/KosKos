<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_kamar', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->increments('ID_Kamar');
            $table->foreign('ID_Bangunan','ID_Bangunan')->references("ID_Bangunan")->on("_bangunan")->onDelete("cascade")->onUpdate("cascade");
            $table->string('TipeKamar');
            $table->integer('JumlahKamar');
            $table->integer('BiayaKamar');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_kamar');
    }
}
