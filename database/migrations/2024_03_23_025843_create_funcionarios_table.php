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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nomeFuncionario', 100);
            $table->string('sobrenomeFuncionario', 200);
            $table->string('emailFuncionario', 255);
            $table->string('especialidadeFuncionario', 100);
            $table->time('inicioExpedienteFuncionario'); // Corrigido
            $table->time('fimExpedienteFuncionario'); // Corrigido
            $table->unsignedBigInteger('cargoFuncionario'); // Corrigido
            $table->foreign('cargoFuncionario')->references('id')->on('Cargos'); // Corrigido
            $table->integer('qntCortesFuncionario');
            $table->string('statusFuncionario', 10);
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
        Schema::dropIfExists('funcionarios');
    }
};
