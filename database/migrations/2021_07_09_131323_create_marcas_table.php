<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->id()->comment('Código de identificação única do registro');
            $table->string('nome', 30)->unique()->comment('Nome da marca');
            $table->string('imagem', 100)->comment('Logo da marca');
            $table->timestamps()->comment('data e hora de criação e alteração do registro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
