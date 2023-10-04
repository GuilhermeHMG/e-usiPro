<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('tbu_unidade', 5); //cm, mm, kg
            $table->string('tbu_descricao', 30);
            $table->timestamps();
        });

        //adicionar o relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_unidade');

            //constraint
            $table->foreign('id_unidade')->references('id')->on('unidades');
        });

        //adicionar o relacionamento com a tabela produto_detalhes
         Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_unidade');

            //constraint
            $table->foreign('id_unidade')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Antes de excluir a tabela 'unidades', removemos as chaves estrangeiras.
        //remover o relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {

            //Remover a foreign key
            $table->dropForeign('produto_detalhes_id_unidade_foreign');

            //Remover a coluna
            $table->dropColumn('id_unidade');

        });

        //remover o relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table) {

            //Remover a foreign key
            $table->dropForeign('produtos_id_unidade_foreign');

            //Remover a coluna
            $table->dropColumn('id_unidade');

        });

        //remover a tabela 'unidades'
        Schema::dropIfExists('unidades');
    }
}
