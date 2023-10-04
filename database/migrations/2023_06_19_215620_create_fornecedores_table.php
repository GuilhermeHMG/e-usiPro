<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('tbf_razao_social', 150);
            $table->string('tbf_nome_fantasia', 100);
            $table->string('tbf_contato', 50);
            $table->string('tbf_cnpj', 14)->unique();
            $table->string('tbf_ie', 9)->unique()->nullable();
            $table->date('tbf_dt_contrato')->nullable();
            $table->text('tbf_obs')->nullable();
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
        Schema::dropIfExists('fornecedores');
    }
}
