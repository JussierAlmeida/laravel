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
        Schema::create('unidades', function(Blueprint $table){
            $table->id();
            $table->string('unidade' ,5);
            $table->string('descricao' ,30);
            $table->timestamps();
    });
    //add relacionamento com produtos
        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
    });

    //add relacionamento com produtos_detalhes
    Schema::table('produto_detalhes', function(Blueprint $table){
        $table->unsignedBigInteger('unidade_id');
        $table->foreign('unidade_id')->references('id')->on('unidades');
});
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //remove a produtos_detalhes da tabela unidaders
        Schema::table('produto_detalhes', function(Blueprint $table){
            //remove fk
            $table->dropForeign('produto_detalhes_unidade_id_foreign');

            //remove coluna unidade
            $table->dropColumn('unidade_id');
    });

        //remove a produtos da tabela unidaders
        Schema::table('produtos', function(Blueprint $table){
            //remove fk
            $table->dropForeign('produtos_unidade_id_foreign');

            //remove coluna unidade
            $table->dropColumn('unidade_id');
    });


        //remove a tabela unidaders
        Schema::dropIfExists('unidades');
    }
};

