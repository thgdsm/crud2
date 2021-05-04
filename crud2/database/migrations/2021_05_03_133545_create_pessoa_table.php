<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelPessoa', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('email');
            $table->date('data_nasc');
            $table->string('nacionalidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_pessoas');
    }
}
