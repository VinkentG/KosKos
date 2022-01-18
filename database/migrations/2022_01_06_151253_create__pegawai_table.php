<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_pegawai', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->string('ID_Pegawai')->primary();
            $table->string('ID_Bangunan');
            $table->foreign('ID_Bangunan')->references("ID_Bangunan")->on("_bangunan")->onDelete("cascade")->onUpdate("cascade");
            $table->string('NamaPegawai');
            $table->string('Peran');
            $table->integer('Gaji');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_pegawai');
    }
}
