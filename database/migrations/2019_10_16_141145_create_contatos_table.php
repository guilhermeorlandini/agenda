<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosTable extends Migration
{
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('contatos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('nome',100);
            $table->string('email',100)->nullable();
            $table->string('tel1',255)->nullable();;
            $table->string('tel2',255)->nullable();
            $table->string('endereco1',100)->nullable();
            $table->string('endereco2',100)->nullable();
            $table->string('cep1',255)->nullable();
            $table->string('cep2',255)->nullable();
            $table->string('cidade1',100)->nullable(); 
            $table->string('cidade2',100)->nullable();  
            $table->timestamps(); 
               
        });

        Schema::table('contatos', function (Blueprint $table) {
            $table->unsignedinteger('user_id');
        
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contatos');
    }
}
