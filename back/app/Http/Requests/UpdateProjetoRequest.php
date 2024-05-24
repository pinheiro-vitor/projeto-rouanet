<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjetoRequest extends FormRequest
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
            'pronac' => 'sometimes|required|string|max:191',
            'ano_projeto' => 'sometimes|required|string|max:191',
            'nome' => 'sometimes|required|string|max:191',
            'segmento' => 'sometimes|required|string|max:191',
            'area' => 'sometimes|required|string|max:191',
            'uf' => 'sometimes|required|string|max:191',
            'municipio' => 'sometimes|required|string|max:191',
            'data_inicio' => 'sometimes|required|string|max:191',
            'data_termino' => 'sometimes|required|string|max:191',
            'situacao' => 'sometimes|required|string|max:191',
            'mecanismo' => 'sometimes|required|string|max:191',
            'enquadramento' => 'sometimes|required|string|max:191',
            'valor_captado' => 'sometimes|required|string|max:191',
            'valor_aprovado' => 'sometimes|required|string|max:191',
            'acessibilidade' => 'sometimes|required|string',
            'objetivos' => 'nullable|string',
            'justificativa' => 'nullable|string',
            'etapa' => 'nullable|string',
            'ficha_tecnica' => 'sometimes|required|string',
            'impacto_ambiental' => 'sometimes|required|string',
            'especificacao_tecnica' => 'sometimes|required|string',
            'providencia' => 'nullable|string',
            'democratizacao' => 'sometimes|required|string',
            'sinopse' => 'sometimes|required|string',
            'resumo' => 'sometimes|required|string',
            'valor_projeto' => 'sometimes|required|string|max:100',
            'outras_fontes' => 'sometimes|required|string|max:100',
            'valor_proposta' => 'sometimes|required|string|max:100',
            'valor_solicitado' => 'sometimes|required|string|max:100',
            'objetivo' => 'sometimes|required|string',
            'estrategia_execucao' => 'sometimes|required|string',
            'link_incentivadores' => 'sometimes|required|string|max:255',
        ];
    }
}
