<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('tbp_nome', 50);
            $table->string('tbp_sobrenome', 150);
            $table->string('tbp_cpf', 11)->unique();
            $table->string('tbp_rg', 10)->unique();
            $table->string('tbp_email', 30)->unique();
            $table->date('tbp_dt_nascimento');
            $table->string('tbp_ctps', 10)->unique();
            $table->string('tbp_pis', 11)->unique();
            $table->string('tbp_habilit', 10);
            $table->string('tbp_reserv', 12)->unique();
            $table->string('banco', 100);
            $table->string('tbp_conta_c', 20)->unique();
            $table->string('tbp_conta_p', 20)->unique();
            $table->string('tbp_tit_elei', 15)->unique();
            $table->string('tbp_est_civil', 30);
            $table->string('tbp_nom_pai', 100);
            $table->string('tbp_nom_mae', 100);
            $table->string('tbp_plc_vei', 7)->unique();
            $table->string('tbp_mod_vei', 50);
            $table->unsignedBigInteger('id_fornecedor');
            $table->unsignedBigInteger('id_cliente');
            $table->timestamps();

            //constraint
            $table->foreign('id_fornecedor')->references('id')->on('fornecedores');
            $table->foreign('id_cliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
