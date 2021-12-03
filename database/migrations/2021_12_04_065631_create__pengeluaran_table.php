<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_pengeluaran', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('Tahun');
            $table->string('Bulan');
            $table->integer('Listrik');
            $table->integer('Wifi');
            $table->integer('Pemeliharaan');
            $table->integer('GajiKaryawan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_pengeluaran');
    }
}
