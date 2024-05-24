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
        Schema::create('projetos', function (Blueprint $table) {
            $table->integer('id_projeto')->unsigned()->primary();
            $table->string('pronac', 191);
            $table->string('ano_projeto', 191);
            $table->string('nome', 191);
            $table->string('segmento', 191);
            $table->string('area', 191);
            $table->string('uf', 191);
            $table->string('municipio', 191);
            $table->string('data_inicio', 191)->charset('ascii');
            $table->string('data_termino', 191)->charset('ascii');
            $table->string('situacao', 191);
            $table->string('mecanismo', 191);
            $table->string('enquadramento', 191);
            $table->string('valor_captado', 191)->charset('ascii');
            $table->string('valor_aprovado', 191)->charset('ascii');
            $table->text('acessibilidade');
            $table->text('objetivos')->nullable();
            $table->text('justificativa')->nullable();
            $table->text('etapa')->nullable();
            $table->text('ficha_tecnica');
            $table->text('impacto_ambiental');
            $table->text('especificacao_tecnica')->charset('ascii');
            $table->text('providencia')->nullable()->charset('ascii');
            $table->text('democratizacao');
            $table->text('sinopse');
            $table->text('resumo');
            $table->timestamps();
            $table->string('valor_projeto', 100)->charset('ascii');
            $table->string('outras_fontes', 100)->charset('ascii');
            $table->string('valor_proposta', 100)->charset('ascii');
            $table->string('valor_solicitado', 100)->charset('ascii');
            $table->longText('objetivo');
            $table->longText('estrategia_execucao');
            $table->string('link_incentivadores', 255)->charset('ascii');

            $table->index('pronac', 'idx_pronac');
            $table->index('municipio', 'idx_cidade');
            $table->index('valor_aprovado', 'idx_valor_projeto');

            $table->fullText(['nome', 'segmento'], 'nome');
            $table->fullText(['nome', 'resumo'], 'nome_2');
            $table->fullText('nome', 'nome_3');
            $table->fullText(['nome', 'resumo', 'objetivo'], 'nome_4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos');
    }
};
