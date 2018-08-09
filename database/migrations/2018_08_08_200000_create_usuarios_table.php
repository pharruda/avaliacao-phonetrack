<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Pensei em criar uma tabela endereço para deixar separado, entretanto, para
         * esse projeto acredito que não haja necessidade.
         */
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('rua')->nullable();
            $table->integer('numero')->nullable();
            $table->string('cep')->nullable();
            $table->string('telefone_fixo', 15)->nullable();
            $table->string('telefone_celular', 15)->nullable();
            $table->integer('cidade_id')->unsigned()->nullable();
            $table->foreign('cidade_id')->references('id')->on('cidades');
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
}
