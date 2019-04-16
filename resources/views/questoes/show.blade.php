@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">Gerenciamento de item</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <p>{{ $questao->descricao_problema }}</p>

                            @foreach ($questao->imagens as $key => $imagem)
                                <img src="{{ asset('storage/' . $imagem->path) }}" class="card-image" alt="">
                            @endforeach

                            @foreach ($questao->enunciados as $key => $enunciado)
                                <p>{{ $enunciado->descricao_enunciado }}</p>
                            @endforeach

                            @foreach ($questao->alternativas as $key => $alternativa)
                                <p>{{ $alternativa->descricao_alternativa }}</p>
                            @endforeach
                        </a>
                    </div>

                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/questoes/' . $questao->id . '/alternativas' ) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="alternativa_texto">Adicione uma alternativa (Se for textual)</label>
                            <textarea class="form-control" id="alternativa_texto" name="descricao_alternativa" rows="3"></textarea>
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label for="alternativa_imagem">Adicione uma alternativa (Se for imagem)</label>
                            <input type="file" class="form-control-file" id="alternativa_imagem" name="imagem_alternativa" aria-describedby="fileHelp">
                        </div>
                        <hr/>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection