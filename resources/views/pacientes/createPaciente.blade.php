@extends('layouts.main')

@section('title', 'Menu')

@section('content')

<div id="creeate-container">
    <form action="/pacientes/create" method="POST" enctype="multipart/form-data">
      @csrf

    <div class="row">
      <div class="mb-12">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" placeholder="Nome do Paciente">
      </div>
      <div class="mb-12">
        <label for="dataNascimento" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="dataNascimento" placeholder="Data de Nascimento">
      </div>
    </div>

    </form>
</div>

@endsection