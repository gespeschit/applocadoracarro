<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->id()->comment('Código de identificação única do registro');
            $table->unsignedBigInteger('marca_id')->comment('Chave estrangeira relacionada a marcas');
            $table->string('nome', 30)->comment('Nome do modelo');
            $table->string('imagem', 100)->comment('Imagem do modelo');
            $table->integer('numero_portas')->comment('Número de portas');
            $table->integer('lugares')->comment('Número de lugares');
            $table->boolean('air_bag')->comment('Se possui airbag');
            $table->boolean('abs')->comment('Se possui freio abs');
            $table->timestamps();

            //foreign key (constraints)
            $table->foreign('marca_id')->references('id')->on('marcas');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelos');
    }
}
