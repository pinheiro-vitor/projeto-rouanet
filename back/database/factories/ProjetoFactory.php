<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Projeto;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projeto>
 */
class ProjetoFactory extends Factory
{

    protected $model = Projeto::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_projeto' => $this->faker->unique()->numberBetween(1, 10000),
            'pronac' => $this->faker->bothify('#####'),
            'ano_projeto' => $this->faker->year,
            'nome' => $this->faker->sentence,
            'segmento' => $this->faker->word,
            'area' => $this->faker->word,
            'uf' => $this->faker->stateAbbr,
            'municipio' => $this->faker->city,
            'data_inicio' => $this->faker->date('Y-m-d'),
            'data_termino' => $this->faker->date('Y-m-d'),
            'situacao' => $this->faker->word,
            'mecanismo' => $this->faker->word,
            'enquadramento' => $this->faker->word,
            'valor_captado' => $this->faker->randomFloat(2, 1000, 1000000),
            'valor_aprovado' => $this->faker->randomFloat(2, 1000, 1000000),
            'acessibilidade' => $this->faker->paragraph,
            'objetivos' => $this->faker->paragraph,
            'justificativa' => $this->faker->paragraph,
            'etapa' => $this->faker->paragraph,
            'ficha_tecnica' => $this->faker->paragraph,
            'impacto_ambiental' => $this->faker->paragraph,
            'especificacao_tecnica' => $this->faker->paragraph,
            'providencia' => $this->faker->paragraph,
            'democratizacao' => $this->faker->paragraph,
            'sinopse' => $this->faker->paragraph,
            'resumo' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
            'valor_projeto' => $this->faker->randomFloat(2, 1000, 1000000),
            'outras_fontes' => $this->faker->randomFloat(2, 1000, 1000000),
            'valor_proposta' => $this->faker->randomFloat(2, 1000, 1000000),
            'valor_solicitado' => $this->faker->randomFloat(2, 1000, 1000000),
            'objetivo' => $this->faker->paragraph,
            'estrategia_execucao' => $this->faker->paragraph,
            'link_incentivadores' => $this->faker->url,
        ];
    }
}
