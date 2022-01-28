<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_pelanggan', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->string('ID_Pelanggan')->primary();
            $table->string('ID_Kamar');
            $table->foreign('ID_Kamar')->references("ID_Kamar")->on("_kamar")->onDelete("cascade")->onUpdate("cascade");
            $table->string('NamaPelanggan');
            $table->biginteger('Notelp');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_pelanggan');
    }
}
