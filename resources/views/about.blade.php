@extends('layouts.landing')

@section('title','about')
    
@section('content')
    <h1>about contenido</h1>
    @component('_components.card')
        @slot('title','Nosotros Como Organizacion')    
        @slot('content','Somos una organizacion muy entretenida y muy comprometida con nuestros clientes')
    @endcomponent
@endsection