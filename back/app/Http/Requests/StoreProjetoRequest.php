<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjetoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_projeto' => 'required|integer|unique:projetos,id_projeto',
            'pronac' => 'required|string|max:191',
            'ano_projeto' => 'required|string|max:191',
            'nome' => 'required|string|max:191',
            'segmento' => 'required|string|max:191',
            'area' => 'required|string|max:191',
            'uf' => 'required|string|max:191',
            'municipio' => 'required|string|max:191',
            'data_inicio' => 'required|string|max:191',
            'data_termino' => 'required|string|max:191',
            'situacao' => 'required|string|max:191',
            'mecanismo' => 'required|string|max:191',
            'enquadramento' => 'required|string|max:191',
            'valor_captado' => 'required|string|max:191',
            'valor_aprovado' => 'required|string|max:191',
            'acessibilidade' => 'required|string',
            'objetivos' => 'nullable|string',
            'justificativa' => 'nullable|string',
            'etapa' => 'nullable|string',
            'ficha_tecnica' => 'required|string',
            'impacto_ambiental' => 'required|string',
            'especificacao_tecnica' => 'required|string',
            'providencia' => 'nullable|string',
            'democratizacao' => 'required|string',
            'sinopse' => 'required|string',
            'resumo' => 'required|string',
            'valor_projeto' => 'required|string|max:100',
            'outras_fontes' => 'required|string|max:100',
            'valor_proposta' => 'required|string|max:100',
            'valor_solicitado' => 'required|string|max:100',
            'objetivo' => 'required|string',
            'estrategia_execucao' => 'required|string',
            'link_incentivadores' => 'required|string|max:255',
        ];
    }
}
