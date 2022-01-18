<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_fasilitas', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->string('ID_Fasilitas')->primary();
            $table->string('ID_Bangunan');
            $table->foreign('ID_Bangunan')->references("ID_Bangunan")->on("_bangunan")->onDelete("cascade")->onUpdate("cascade");
            $table->integer('WIFI');
            $table->integer('Listrik');
            $table->integer('Pemeliharaan');
            $table->string('Pengeluaran');
            $table->date('Tanggal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_fasilitas');
    }
}
