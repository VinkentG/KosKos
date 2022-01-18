<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangunanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_bangunan', function (Blueprint $table) {
            // $table->id()->nullable();
            $table->engine = 'InnoDB';
            $table->timestamps();
            $table->string('ID_Bangunan')->primary();
            $table->unsignedBigInteger('ID_Pemilik');
            $table->foreign('ID_Pemilik')->references('ID_Pemilik')->on('users')->onDelete("cascade")->onUpdate("cascade");
            $table->string('Nama');
            $table->string('Alamat');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_bangunan');
    }
}
