<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $table = 'projetos';
    protected $primaryKey = 'id_projeto';
    protected $fillable = [
        'id_projeto',
        'pronac',
        'ano_projeto',
        'nome',
        'segmento',
        'area',
        'uf',
        'municipio',
        'data_inicio',
        'data_termino', 
        'situacao',
        'mecanismo',
        'enquadramento',
        'valor_captado',
        'valor_aprovado',
        'acessibilidade',
        'objetivos', 
        'justificativa',
        'etapa',
        'ficha_tecnica',
        'impacto_ambiental',
        'especificacao_tecnica',
        'providencia',
        'democratizacao',
        'sinopse',
        'resumo',
        'valor_projeto',
        'outras_fontes',
        'valor_proposta',
        'valor_solicitado',
        'objetivo', 
        'estrategia_execucao',
        'link_incentivadores'
    ];
}
