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
        Schema::create('produtos', function (Blueprint $table) {

        $table->id();
        $table->unsignedBigInteger('usuario_id');
        $table->string('titulo', 100);
        $table->text('descricao')->nullable();
        $table->longText('descricao_detalhada')->nullable();
        $table->integer('estoque');
        $table->tinyInteger('avaliacao')->nullable();
        $table->float('media_avaliacao', 3, 1)->nullable();
        $table->double('desconto', 8, 2)->nullable();
        $table->decimal('preco', 10, 2);
        $table->boolean('ativo')->default(true);
        $table->date('disponivel_a_partir');
        $table->dateTime('vendido_em')->nullable();
        $table->time('tempo_entrega')->nullable();
        $table->timestamp('publicado_em')->nullable();
        $table->binary('miniatura')->nullable();
        $table->enum('situacao', ['ativo', 'inativo', 'pendente'])->default('pendente');
        $table->json('atributos')->nullable();
        $table->rememberToken();
        $table->timestamps();

        $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
