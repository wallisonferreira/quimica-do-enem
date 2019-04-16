@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gerenciamento de item</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ dd($questao) }}
                    
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <p>{{ $questao->descricao_problema }}</p>

                            @foreach ($questao->imagens as $key => $imagem)
                                <img src="{{ asset('storage/' . $imagem->path) }}" class="card-image" alt="">
                            @endforeach

                            @foreach ($questao->enunciados as $key => $enunciado)
                                <p>{{ $enunciado->descricao_enunciado }}</p>
                            @endforeach
                            <a href="{{ url('/questoes' . '/' . $questao->id ) }}" class="btn btn-primary">Gerenciar item...</a>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection