<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('tbfu_func', 50);
            $table->dateTime('tbfu_dt_adm');
            $table->dateTime('tbfu_dt_dem')->nullable();
            $table->decimal('tbfu_sal', 10, 2)->nullable();
            $table->integer('tbfu_aus_ano')->nullable();
            $table->text('tbfu_obs')->nullable();
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
        Schema::dropIfExists('funcionarios');
    }
}
