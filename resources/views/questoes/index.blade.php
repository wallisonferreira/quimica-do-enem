@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Banco de itens</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="list-group">
                        {{--  Iteração sobre questões  --}}
                        @foreach ($questoes as $questao)
                            <a href="#" class="list-group-item list-group-item-action">
                            {{--  Descrição do problema de cada questão  --}}
                            <p>{{ $questao->descricao_problema }}</p>
                            {{--  Fim de descrição do problema  --}}

                            {{--  Iteração sobre imagens de cada questão  --}}
                            @foreach ($questao->imagens as $key => $imagem)
                                <img src="{{ asset('storage/' . $imagem->path) }}" alt="">
                            @endforeach
                            {{--  Fim de iteração sobre imagens  --}}

                            {{--  Descrição do enunciado de cada questão  --}}
                            @foreach ($questao->enunciados as $key => $enunciado)
                                <p>{{ $enunciado->descricao_enunciado }}</p>
                            @endforeach
                            {{--  Fim de descrição do enunciado  --}}
                            </a>
                        @endforeach
                        {{--  Fim de iteração sobre questões  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection