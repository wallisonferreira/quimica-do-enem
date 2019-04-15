<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questao;

class QuestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questoes = Questao::all();

        return view('questoes.index', compact('questoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conteudos = \App\Conteudo::all();

        $competencias = \App\Competencia::all();

        return view('questoes.create', compact([
            'conteudos',
            'competencias',
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $questao = new Questao;
        $questao->fill($request->all());
        $questao->user_id = auth()->user()->id;
        $questao->save();

        if ($request->has('imagem') && $request->file('imagem')) {
            $requestFile = $request->file('imagem');

            $path = $requestFile->store('itens/imagens');

            $imagem = \App\Imagem::create([
                'path' => $path,
                'questao_id' => $questao->id,
            ]);
        }

        if ($request->has('descricao_enunciado') && $request->descricao_enunciado) {
            $enunciado = new \App\Enunciado;
            $enunciado->fill($request->all());
            $enunciado->questao()->associate($questao);
            $enunciado->save();
        }

        return redirect('/questoes')->with('success', 'Item salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Questao $questao)
    {
        return view('questoes.show', compact('questao'));
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
