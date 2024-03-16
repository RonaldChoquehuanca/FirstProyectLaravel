@extends('layouts.landing')

{{-- las @section son para los layouts --}}
@section('title','services') 

@section('content')
    <h1>services content</h1>
    @component('_components.card') {{-- recibe la ruta del componente  --}}
    {{-- los @slot son para los componentes --}}
        @slot('title','Services 1')
        @slot('content')
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis rem distinctio explicabo deleniti unde repellendus pariatur quidem, nam ab id! Quis dolor nostrum ducimus voluptas distinctio quidem sunt aliquid aut?</p>
        @endslot
             
    @endcomponent

    @component('_components.card')

    @slot('title','Services 2')
    @slot('content')
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur quas qui minus nihil blanditiis, eligendi dolores repudiandae. Quis veniam, rerum esse a rem fugiat tempore illum ut ex, harum ipsam.</p>
    @endslot

    @endcomponent

    @component('_components.card')
        
        @slot('title', 'Service 3')
        @slot('content')
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis facere veritatis officia temporibus sit expedita ex nisi deserunt laborum labore? Fugit voluptatum harum ut aliquam similique, obcaecati optio provident fugiat!</p>
        @endslot

    @endcomponent

@endsection