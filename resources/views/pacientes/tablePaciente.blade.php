@extends('layouts.main')

@section('title', 'Menu')

@section('content')

<div id="app">
  <h2>Lista de Pacientes</h2>
  <div class="table-responsive">
      <table class="table table-striped">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Nome da Mãe</th>
              </tr>
          </thead>
          <tbody>
              <tr v-for="(paciente, create) in pacientes" :key="create" @click="viewPatient(paciente)">
                  <td>@{{ create + 1 }}</td>
                  <td>@{{ paciente.name }}</td>
                  <td>@{{ paciente.nameMae }}</td>
              </tr>
          </tbody>
      </table>
  </div>
</div>

@endsection