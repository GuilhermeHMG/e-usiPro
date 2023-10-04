<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->id();
            $table->string('tbt_ddr', 2)->nullable();
            $table->string('tbt_res', 10)->nullable();
            $table->string('tbt_ddc', 2)->nullable();
            $table->string('tbt_cel', 10)->nullable();
            $table->string('tbt_ddco', 2)->nullable();
            $table->string('tbt_com', 10)->nullable();
            $table->unsignedBigInteger('id_pessoa');
            $table->timestamps();

            //constraint
            $table->foreign('id_pessoa')->references('id')->on('pessoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefones');
    }
}
