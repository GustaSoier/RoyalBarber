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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nomeUsuario', 255);
            $table->string('emailUsuario',255);
            $table->string('senhaUsuario', 255);
            $table->unsignedBigInteger('tipoUsuaioId');
            $table->string('tipoUsuarioType', 255);
            $table->timestamp('emailVerificado')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
};
