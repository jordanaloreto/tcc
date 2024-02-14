@extends('layouts.main')

@section('title', 'Menu')

@section('content')

    <div id="creeate-container">
        <form action="{{ route('pacienteCadastro') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col">
                    <div class="mb-12">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Paciente">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-12">
                        <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" placeholder="Data de Nascimento">
                    </div>
                </div>
                <div class="col">
                    <label for="sexo" class="form-label">Sexo</label>
                    <select class="form-select" id="sexo" name="sexo" aria-label="Default select example">
                        <option selected>Selecione</option>
                        <option value="1">Feminino</option>
                        <option value="2">Masculino</option>
                        <option value="3">Outros</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-12">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-12">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-12">
                        <label for="sus" class="form-label">SUS</label>
                        <input type="text" class="form-control" id="sus" name="sus" placeholder="SUS">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-12">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-12">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-12">
                        <label for="nameMae" class="form-label">Nome Mãe</label>
                        <input type="text" class="form-control" id="nameMae" name="nameMae" placeholder="Nome Mãe">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-12">
                        <label for="namePai" class="form-label">Nome Pai</label>
                        <input type="text" class="form-control" id="namePai" name="namePai" placeholder="Nome Pai">
                    </div>
                </div>
            </div>
            <br>
            <div class="col">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-primary">Editar</button>
                <button type="button" class="btn btn-primary">Excluir</button>
            </div>

        </form>
    </div>

@endsection
