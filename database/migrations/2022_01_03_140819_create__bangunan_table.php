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
            $table->increments('BangunanID')->nullable();
            $table->foreign('UserID','users')->references("UserID")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
            $table->string('Tahun');
            $table->string('Bulan');
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
