@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gerenciamento de itens</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Criar novo item</h5>
                                    <p class="card-text">Formulário para inserção de item</p>
                                    <a class="btn btn-info" href="{{ route('questoes.create') }}" role="button">Criar novo item</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Banco de itens</h5>
                                    <p class="card-text">Lista de itens adicionados</p>
                                    <a class="btn btn-secondary" href="{{ route('questoes.index') }}" role="button">Acessar o banco de itens</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
