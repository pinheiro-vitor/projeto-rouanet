<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjetoRequest;
use App\Http\Requests\UpdateProjetoRequest;
use App\Models\Projeto;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API Documentação do Projeto Rouanet",
 *      description="Documentação da API para o projeto Rouanet",
 * )
 * 
 * @OA\PathItem(path="/api")
 */
class ProjetoController extends Controller
{
    /**
     * @OA\Schema(
     *      schema="Projeto",
     *      type="object",
     *      title="Projeto",
     *      properties={
     *          @OA\Property(property="id_projeto", type="integer"),
     *          @OA\Property(property="pronac", type="string"),
     *          @OA\Property(property="ano_projeto", type="string"),
     *          @OA\Property(property="nome", type="string"),
     *          @OA\Property(property="segmento", type="string"),
     *          @OA\Property(property="area", type="string"),
     *          @OA\Property(property="uf", type="string"),
     *          @OA\Property(property="municipio", type="string"),
     *          @OA\Property(property="data_inicio", type="string"),
     *          @OA\Property(property="data_termino", type="string"),
     *          @OA\Property(property="situacao", type="string"),
     *          @OA\Property(property="mecanismo", type="string"),
     *          @OA\Property(property="enquadramento", type="string"),
     *          @OA\Property(property="valor_captado", type="string"),
     *          @OA\Property(property="valor_aprovado", type="string"),
     *          @OA\Property(property="acessibilidade", type="string"),
     *          @OA\Property(property="objetivos", type="string"),
     *          @OA\Property(property="justificativa", type="string"),
     *          @OA\Property(property="etapa", type="string"),
     *          @OA\Property(property="ficha_tecnica", type="string"),
     *          @OA\Property(property="impacto_ambiental", type="string"),
     *          @OA\Property(property="especificacao_tecnica", type="string"),
     *          @OA\Property(property="providencia", type="string"),
     *          @OA\Property(property="democratizacao", type="string"),
     *          @OA\Property(property="sinopse", type="string"),
     *          @OA\Property(property="resumo", type="string"),
     *          @OA\Property(property="valor_projeto", type="string"),
     *          @OA\Property(property="outras_fontes", type="string"),
     *          @OA\Property(property="valor_proposta", type="string"),
     *          @OA\Property(property="valor_solicitado", type="string"),
     *          @OA\Property(property="objetivo", type="string"),
     *          @OA\Property(property="estrategia_execucao", type="string"),
     *          @OA\Property(property="link_incentivadores", type="string")
     *      }
     * )
     *
     * @OA\Schema(
     *      schema="ProjetoCreateRequest",
     *      type="object",
     *      required={"pronac", "ano_projeto", "nome", "segmento", "area", "uf", "municipio", "data_inicio", "data_termino", "situacao", "mecanismo", "enquadramento", "valor_captado", "valor_aprovado", "acessibilidade", "ficha_tecnica", "impacto_ambiental", "especificacao_tecnica", "democratizacao", "sinopse", "resumo", "valor_projeto", "outras_fontes", "valor_proposta", "valor_solicitado", "objetivo", "estrategia_execucao", "link_incentivadores"},
     *      properties={
     *          @OA\Property(property="pronac", type="string"),
     *          @OA\Property(property="ano_projeto", type="string"),
     *          @OA\Property(property="nome", type="string"),
     *          @OA\Property(property="segmento", type="string"),
     *          @OA\Property(property="area", type="string"),
     *          @OA\Property(property="uf", type="string"),
     *          @OA\Property(property="municipio", type="string"),
     *          @OA\Property(property="data_inicio", type="string"),
     *          @OA\Property(property="data_termino", type="string"),
     *          @OA\Property(property="situacao", type="string"),
     *          @OA\Property(property="mecanismo", type="string"),
     *          @OA\Property(property="enquadramento", type="string"),
     *          @OA\Property(property="valor_captado", type="string"),
     *          @OA\Property(property="valor_aprovado", type="string"),
     *          @OA\Property(property="acessibilidade", type="string"),
     *          @OA\Property(property="objetivos", type="string"),
     *          @OA\Property(property="justificativa", type="string"),
     *          @OA\Property(property="etapa", type="string"),
     *          @OA\Property(property="ficha_tecnica", type="string"),
     *          @OA\Property(property="impacto_ambiental", type="string"),
     *          @OA\Property(property="especificacao_tecnica", type="string"),
     *          @OA\Property(property="providencia", type="string"),
     *          @OA\Property(property="democratizacao", type="string"),
     *          @OA\Property(property="sinopse", type="string"),
     *          @OA\Property(property="resumo", type="string"),
     *          @OA\Property(property="valor_projeto", type="string"),
     *          @OA\Property(property="outras_fontes", type="string"),
     *          @OA\Property(property="valor_proposta", type="string"),
     *          @OA\Property(property="valor_solicitado", type="string"),
     *          @OA\Property(property="objetivo", type="string"),
     *          @OA\Property(property="estrategia_execucao", type="string"),
     *          @OA\Property(property="link_incentivadores", type="string")
     *      }
     * )
     * 
     * @OA\Schema(
     *      schema="ProjetoUpdateRequest",
     *      type="object",
     *      properties={
     *          @OA\Property(property="pronac", type="string"),
     *          @OA\Property(property="ano_projeto", type="string"),
     *          @OA\Property(property="nome", type="string"),
     *          @OA\Property(property="segmento", type="string"),
     *          @OA\Property(property="area", type="string"),
     *          @OA\Property(property="uf", type="string"),
     *          @OA\Property(property="municipio", type="string"),
     *          @OA\Property(property="data_inicio", type="string"),
     *          @OA\Property(property="data_termino", type="string"),
     *          @OA\Property(property="situacao", type="string"),
     *          @OA\Property(property="mecanismo", type="string"),
     *          @OA\Property(property="enquadramento", type="string"),
     *          @OA\Property(property="valor_captado", type="string"),
     *          @OA\Property(property="valor_aprovado", type="string"),
     *          @OA\Property(property="acessibilidade", type="string"),
     *          @OA\Property(property="objetivos", type="string"),
     *          @OA\Property(property="justificativa", type="string"),
     *          @OA\Property(property="etapa", type="string"),
     *          @OA\Property(property="ficha_tecnica", type="string"),
     *          @OA\Property(property="impacto_ambiental", type="string"),
     *          @OA\Property(property="especificacao_tecnica", type="string"),
     *          @OA\Property(property="providencia", type="string"),
     *          @OA\Property(property="democratizacao", type="string"),
     *          @OA\Property(property="sinopse", type="string"),
     *          @OA\Property(property="resumo", type="string"),
     *          @OA\Property(property="valor_projeto", type="string"),
     *          @OA\Property(property="outras_fontes", type="string"),
     *          @OA\Property(property="valor_proposta", type="string"),
     *          @OA\Property(property="valor_solicitado", type="string"),
     *          @OA\Property(property="objetivo", type="string"),
     *          @OA\Property(property="estrategia_execucao", type="string"),
     *          @OA\Property(property="link_incentivadores", type="string")
     *      }
     * )
     * @OA\Get(
     *      path="/api/projetos",
     *      operationId="getProjetosList",
     *      tags={"Projetos"},
     *      summary="Retorna a lista de projetos",
     *      description="Retorna a lista de projetos",
     *      @OA\Response(
     *          response=200,
     *          description="Sucesso",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(ref="#/components/schemas/Projeto")
     *          ),
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Erro de validação",
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Não encontrado",
     *      ),
     * )
     */
    public function index()
    {
        $projetos = Projeto::all();
        return response()->json($projetos);
    }

    /**
     * @OA\Post(
     *      path="/api/projetos",
     *      operationId="storeProjeto",
     *      tags={"Projetos"},
     *      summary="Cria um novo projeto",
     *      description="Cria um novo projeto",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/ProjetoCreateRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Projeto criado com sucesso",
     *          @OA\JsonContent(ref="#/components/schemas/Projeto")
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Erro de validação",
     *      ),
     * )
     */
    public function store(StoreProjetoRequest $request)
    {
        $data = $request->validated();
        $projeto = Projeto::create($data);
        return response()->json($projeto, 201);
    }

    /**
     * @OA\Get(
     *      path="/api/projetos/{id}",
     *      operationId="getProjetoById",
     *      tags={"Projetos"},
     *      summary="Retorna um projeto pelo ID",
     *      description="Retorna um projeto pelo ID",
     *      @OA\Parameter(
     *          name="id",
     *          description="ID do Projeto",
     *          required=true,
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Sucesso",
     *          @OA\JsonContent(ref="#/components/schemas/Projeto")
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Não encontrado",
     *      ),
     * )
     */
    public function show($id)
    {
        $projeto = Projeto::findOrFail($id);
        return response()->json($projeto);
    }

    /**
     * @OA\Put(
     *      path="/api/projetos/{id}",
     *      operationId="updateProjeto",
     *      tags={"Projetos"},
     *      summary="Atualiza um projeto existente",
     *      description="Atualiza um projeto existente",
     *      @OA\Parameter(
     *          name="id",
     *          description="ID do Projeto",
     *          required=true,
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/ProjetoUpdateRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Projeto atualizado com sucesso",
     *          @OA\JsonContent(ref="#/components/schemas/Projeto")
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Erro de validação",
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Não encontrado",
     *      ),
     * )
     */
    public function update(UpdateProjetoRequest $request, $id)
    {
        $data = $request->validated();
        $projeto = Projeto::findOrFail($id);
        $projeto->update($data);
        return response()->json($projeto);
    }

    /**
     * @OA\Delete(
     *      path="/api/projetos/{id}",
     *      operationId="deleteProjeto",
     *      tags={"Projetos"},
     *      summary="Deleta um projeto",
     *      description="Deleta um projeto",
     *      @OA\Parameter(
     *          name="id",
     *          description="ID do Projeto",
     *          required=true,
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Projeto deletado com sucesso",
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Não encontrado",
     *      ),
     * )
     */
    public function destroy($id)
    {
        $projeto = Projeto::findOrFail($id);
        $projeto->delete();
        return response()->json(null, 204);
    }
}
