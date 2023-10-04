<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('tbc_razao_social', 150)->nullable();
            $table->string('tbc_nome_fantasia', 100)->nullable();
            $table->string('tbc_contato', 50);
            $table->string('tbc_cnpj', 14)->unique()->nullable();
            $table->string('tbc_ie', 9)->unique()->nullable();
            $table->integer('tbc_situacao');
            $table->date('tbc_dt_contrato')->nullable();
            $table->decimal('tbc_vlr_contrato', 10, 2)->nullable();
            $table->integer('tbc_parc_vlr_contrato')->nullable();
            $table->text('tbc_obs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
