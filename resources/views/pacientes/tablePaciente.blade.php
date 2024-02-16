@extends('layouts.main')

@section('title', 'Menu')

@section('content')

<div id="app">
  <h2>Contador</h2>
  <p>Contagem: @{{ contador }}</p>
  <button @click="incrementarContador">Incrementar</button>
</div>

@endsection

@push('scripts')
<script>
    const app = new Vue({
        el: '#app',
        data: {
            contador: 0
        },
        methods: {
            incrementarContador() {
                this.contador++;
            }
        }
    });
</script>
@endpush
