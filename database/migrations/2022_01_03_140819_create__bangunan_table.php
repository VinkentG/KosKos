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
            $table->timestamps();
            $table->increments('ID_Bangunan');
            $table->foreign('UserID','UserID')->references("UserID")->on("users")->onDelete("cascade")->onUpdate("cascade");
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
