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
            $table->string('ID_Transaksi');
            $table->string('ID_Bangunan');
            $table->string('ID_Kamar');
            $table->string('ID_Pelanggan');
            $table->unsignedBigInteger('ID_Pemilik');
            $table->foreign('ID_Kamar')->references("ID_Kamar")->on("_kamar")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('ID_Bangunan')->references("ID_Bangunan")->on("_bangunan")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('ID_Pelanggan')->references("ID_Pelanggan")->on("_pelanggan")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('ID_Pemilik')->references("ID_Pemilik")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->date('Tanggal');
            $table->date('TanggalKeluar')->nullable();
            $table->integer('Nominal')->nullable();
            $table->string('Status')->nullable();
            $table->integer('LamaSewa')->nullable();
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
