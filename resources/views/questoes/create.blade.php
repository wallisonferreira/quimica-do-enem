@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Adicionar novo item</div>

                <div class="card-body">
                    <form action="{{ route('questoes.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleSelect1">Conteúdo</label>
                            <select class="form-control" id="exampleSelect1" name="conteudo_id">
                                @foreach ($conteudos as $conteudo)
                                <option value="{{ $conteudo->id }}">{{ $conteudo->descricao }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Competência</label>
                            <select class="form-control" id="exampleSelect1" name="competencia_id">
                                @foreach ($competencias as $competencia)
                                <option value="{{ $competencia->id }}">{{ $competencia->descricao }}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="exampleTextarea">Situação-problema</label>
                            <textarea class="form-control" id="exampleTextarea" name="descricao_problema" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Imagem (Opcional)</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" name="imagem" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Imagem para contextualização do item.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Enunciado</label>
                            <textarea class="form-control" id="exampleTextarea" name="descricao_enunciado" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection