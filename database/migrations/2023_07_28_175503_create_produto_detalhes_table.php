<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->float('tbpd_comprimento', 8, 2);
            $table->float('tbpd_largura', 8, 2);
            $table->float('tbpd_altura', 8, 2);
            $table->unsignedBigInteger('id_produto');
            $table->timestamps();

            //constraint
            $table->foreign('id_produto')->references('id')->on('produtos');
            $table->unique('id_produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_detalhes');
    }
}
