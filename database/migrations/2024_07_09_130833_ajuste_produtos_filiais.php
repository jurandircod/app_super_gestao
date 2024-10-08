<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criando a tabella filias
        Schema::create('filiais', function(Blueprint $table){
            $table->id();
            $table->String('filial', 30);
            $table->timestamps();
        });

        // crianto tabela produto_filiais
        Schema::create('produto_filiais', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda', 8 ,2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
            $table->timestamps();

            //foreign key
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });

        //removendo colunas da tabelas
        Schema::table('produtos', function(Blueprint $table){
            $table->dropColumn('preco_venda', 'estoque_minimo', 'estoque_maximo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // adicionar colunas da tabela produtos
        Schema::table('produtos', function(Blueprint $table){
            $table->decimal('preco_vemda', 8, 2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
        });

        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('filiais');

    }
}
