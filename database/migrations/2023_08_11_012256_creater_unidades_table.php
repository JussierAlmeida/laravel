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
        Schema:: create('uniddaders', function(Blueprint $table){
            $table->id();
            $table->string('unidade' ,5);
            $table->string('descricao' ,30);
            $table->timestamps();
    });
    //add relacionamento com produtos
        Schema:: table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('uniddade_id');
            $table->foreign('uniddade_id')->references('id')->on('uniddaders');
    });

    //add relacionamento com produtos_detalhes
    Schema:: table('produto_detalhes', function(Blueprint $table){
        $table->unsignedBigInteger('uniddade_id');
        $table->foreign('uniddade_id')->references('id')->on('uniddaders');
});
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //remove a produtos_detalhes da tabela unidaders
        Schema:: table('produto_detalhes', function(Blueprint $table){
            //remove fk
            $table->dropForeign('produtos_detalhes_uniddade_id_foreign');

            //remove coluna unidade
            $table->dropColumn('uniddade_id');
    });

        //remove a produtos da tabela unidaders
        Schema:: table('produtos', function(Blueprint $table){
            //remove fk
            $table->dropForeign('produto_uniddade_id_foreign');

            //remove coluna unidade
            $table->dropColumn('uniddade_id');
    });


        //remove a tabela unidaders
        Schema::dropIfExists('uniddaders');
    }
};
