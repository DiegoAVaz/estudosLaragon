@extends('site.layout')
@section('title', 'Essa é a página Home')
@section('conteudo')
    
    <div class="row container">

        @foreach ($produtos as $produto)

        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                  <img src="{{ $produto->imagem }}">
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title">{{ $produto->nome }}</span>
                    <p>{{ Str::limit($produto->descricao, 20) }}</p>
                    </div>
              </div>
        </div>
            
        @endforeach

    </div>

    <div class="row center">
        {{ $produtos->links('custom.pagination') }}
    </div>

@endsection






















{{-- @section('conteudo')
    


@include('includes.mensagem', ['titulo' => 'Mensagem de sucesso!'])

@component('components.sidebar')
    @slot('paragrafo')
        Texto qualquer vindo do slot
    @endslot
@endcomponent

@endsection --}}






{{-- @push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush --}}