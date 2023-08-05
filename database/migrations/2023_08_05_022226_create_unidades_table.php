<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidades', 5);//cm, mm,kg
            $table->string('descricao', 30);
            $table->timestamps();
        });
        //adicionar o relacionamento com tabela produtos
        Schema::table('produtos', function (Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
        //adicionar o relacionamento com tabela produto_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //adicionar o relacionamento com tabela produto_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table){
            //remove a FK
               $table->dropForeign('produtos_detalhes_unidade_id_foreign');//[table]_[coluna]_foreign
            //remove a coluna unidade_id
               $table->dropColumn('unidade_id');
   
           });
           //adicionar o relacionamento com tabela produtos
            
            Schema::table('produtos', function(Blueprint $table){
               //remove a FK
                  $table->dropForeign('produtos_unidade_id_foreign');//[table]_[coluna]_foreign
               //remove a coluna unidade_id
                  $table->dropColumn('unidade_id');
      
              });
           Schema::drop('unidades');
    }
};
