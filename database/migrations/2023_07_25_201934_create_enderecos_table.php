<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('tbe_logradouro', 100);
            $table->integer('tbe_num');
            $table->string('tbe_comp', 50)->nullable();
            $table->string('tbe_bairro', 60);
            $table->string('tbe_cidade', 60);
            $table->string('tbe_uf', 2);
            $table->string('tbe_cep', 8);
            $table->string('tbe_end_cobranca', 150)->nullable();
            $table->unsignedBigInteger('id_pessoa');
            $table->timestamps();

            //constraint
            $table->foreign('id_pessoa')->references('id')->on('pessoas');
            $table->unique('id_pessoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
