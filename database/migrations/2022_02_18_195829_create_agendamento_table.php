<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('departamento_id');
            $table->date('data_saida');
            $table->time('hora_saida');
            $table->string('origem', '250');
            $table->string('destino', '250');
            $table->unsignedBigInteger('veiculo_id')->nullable();
            $table->text('justificativa');
            $table->text('observacao')->nullable();
            $table->enum('status', ['Aguardando Confirmação', 'Em Atendimento', 'Finalizado', 'Cancelado']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('departamento_id')->references('id')->on('departamento');
            $table->foreign('veiculo_id')->references('id')->on('veiculo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamento');
    }
};
