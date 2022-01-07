<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_transaksi', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->increments('ID_Transaksi');
            $table->foreign('ID_Kamar','ID_Kamar')->references("ID_Kamar")->on("_kamar")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('ID_Bangunan','ID_Bangunan')->references("ID_Bangunan")->on("_bangunan")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('UserID','UserID')->references("UserID")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->integer('LabaBersih');
            $table->integer('LabaKotor');
            $table->integer('Pengeluaran');
            $table->string('Bulan');
            $table->string('Tahun');
            $table->integer('Nominal');
            $table->string('Status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_transaksi');
    }
}
