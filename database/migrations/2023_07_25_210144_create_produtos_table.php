<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('tbpr_nome', 100);
            $table->text('tbpr_desc')->nullable();
            $table->integer('tbpr_peso')->nullable();
            $table->integer('tbpr_est_min')->default(1);
            $table->integer('tbpr_est_max')->nullable()->default(999999);
            $table->decimal('tbpr_vlr_vend_var', 10, 2);
            $table->decimal('tbpr_vlr_vend_at', 10, 2);
            $table->decimal('tbpr_custo', 10, 2);
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
        Schema::dropIfExists('produtos');
    }
}
