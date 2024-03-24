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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nomeCliente', 100);
            $table->string('sobrenomeCliente', 200);
            $table->string('emailCliente', 255);
            $table->string('telefoneCliente', 11);
            $table->string('enderecoCliente', 150);
            $table->integer('qntCortesCliente');
            $table->string('statusCliente', 10);
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
        Schema::dropIfExists('clientes');
    }
};
