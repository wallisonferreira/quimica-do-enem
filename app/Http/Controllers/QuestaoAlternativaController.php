<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alternativa;

class QuestaoAlternativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        # Se for alternativa textual e não for nulo
        if ($request->has('descricao_alternativa') && !is_null($request->descricao_alternativa)) {
            $alternativa = \App\Alternativa::create([
                'descricao_alternativa' => $request->descricao_alternativa,
                'questao_id' => $id,
            ]);
            return redirect('/questoes/' . $id)->with('success', 'Salvo com sucesso!');

        # Se for alternativa em imagem e não for nulo
        } else if ($request->has('imagem_alternativa') && $request->file('imagem_alternativa')) {
            $requestFile = $request->file('imagem_alternativa');

            $path = $requestFile->store('itens/alternativas/imagens');

            $imagem = \App\Alternativa::create([
                'path_alternativa' => $path,
                'imagem' => 1,
                'questao_id' => $id,
            ]);
            return redirect('/questoes/' . $id)->with('success', 'Salvo com sucesso!');

        # Se nenhum campo for preenchido
        } else {
            return redirect('/questoes/' . $id)->with('success', 'Campo não preenchido!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
