@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-header-title">Gerenciamento de itens</h3>
                </div>

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
                                    <p class="card-text">Formulário para elaboração de item</p>
                                    <a class="btn btn-info" href="{{ route('questoes.create') }}" role="button">Criar novo item</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Banco de itens</h5>
                                    <p class="card-text">Lista de itens elaborados</p>
                                    <a class="btn btn-secondary" href="{{ route('questoes.index') }}" role="button">Acessar o banco de itens</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
