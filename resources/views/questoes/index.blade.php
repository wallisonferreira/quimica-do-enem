@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h2 class="card-header-title">Banco de itens</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{--  Iteração sobre questões  --}}
                    @foreach ($questoes as $questao)
                    <div class="row mb-3">
                        <div class="col-9">
                            <div class="list-group">
                                
                                    <a href="#" class="list-group-item list-group-item-action">
                                    {{--  Descrição do problema de cada questão  --}}
                                    <p>{{ $questao->descricao_problema }}</p>
                                    {{--  Fim de descrição do problema  --}}

                                    {{--  Iteração sobre imagens de cada questão  --}}
                                    @foreach ($questao->imagens as $key => $imagem)
                                        <img src="{{ asset('storage/' . $imagem->path) }}" class="card-img" alt="">
                                    @endforeach
                                    {{--  Fim de iteração sobre imagens  --}}

                                    {{--  Descrição do enunciado de cada questão  --}}
                                    @foreach ($questao->enunciados as $key => $enunciado)
                                        <p>{{ $enunciado->descricao_enunciado }}</p>
                                    @endforeach
                                    {{--  Fim de descrição do enunciado  --}}

                                    @foreach ($questao->alternativas as $key => $alternativa)
                                        @if ($alternativa->imagem == 0)
                                        <p>{{ $alternativa->descricao_alternativa }}</p>
                                        @endif

                                        @if ($alternativa->imagem == 1)
                                        <p>{{ $alternativa->descricao_alternativa }}</p>
                                        <img src="{{ asset('storage/' . $alternativa->path_alternativa) }}" class="card-image" alt="">
                                        @endif
                                    @endforeach
                                    </a>                            
                            </div>
                        </div>
                        <div class="col-3">
                            <a href="{{ url('/questoes/' . $questao->id ) }}" class="btn btn-primary">Gerenciar item...</a>
                        </div>
                    </div>
                    @endforeach
                    {{--Fimdeiteraçãosobrequestões--}}
                </div>
            </div>
            <?php echo $questoes->links(); ?>
        </div>
    </div>
@endsection