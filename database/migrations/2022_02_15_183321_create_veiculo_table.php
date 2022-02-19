<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 150);
            $table->string('modelo', 200);
            $table->integer('ano');
            $table->string('cor', 100);
            $table->unsignedBigInteger('categoria_id');
            $table->bigInteger('km_inicial', )->comment('Quilometragem Inicial');
            $table->string('placa', 10);
            $table->string('patrimonio', 10);
            $table->string('chassis', 20);
            $table->string('renavam', 12);
            $table->enum('status', ['ativo', 'inativo']);
            $table->unsignedBigInteger('user_cadastro_id');
            $table->unsignedBigInteger('user_alteracao_id')->nullable();
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categoria_veiculo');
            $table->foreign('user_cadastro_id')->references('id')->on('users');
            $table->foreign('user_alteracao_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculo');
    }
}
