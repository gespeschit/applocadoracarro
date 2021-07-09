<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//LOCACOES
// Renomear a classe para CreateLocacoesTable
// Renomear a tabela para locacoes (ajustar o model)
public function up()
{
    Schema::create('locacoes', function (Blueprint $table) {
        $table->id()->comment('Código de identificação única do registro');
        $table->unsignedBigInteger('cliente_id')->comment('Chave estrangeira relacionada a clientes');
        $table->unsignedBigInteger('carro_id')->comment('Chave estrangeira relacionada a carros');
        $table->dateTime('data_inicio_periodo')->comment('Data início locação');
        $table->dateTime('data_final_previsto_periodo')->comment('Data prevista de entrega');
        $table->dateTime('data_final_realizado_periodo')->comment('Data que foi entregue');
        $table->float('valor_diaria', 8,2)->comment('Valor da diária');
        $table->integer('km_inicial')->comment('Quilometragem inicial');
        $table->integer('km_final')->comment('Quilometragem final');
        $table->timestamps()->comment('Data e hora de criação e alteração de registros');

        //foreign key (constraints)
        $table->foreign('cliente_id')->references('id')->on('clientes');
        $table->foreign('carro_id')->references('id')->on('carros');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locacaos');
    }
}
