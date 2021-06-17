@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>{{__('Portfolio')}}</h1>

    <ul>       
        @isset($portfolio)
            @forelse ($portfolio as $portfolioItem)
                <li>{{$portfolioItem['title']}} </li>
            @empty
                <li>No hay proyectos para mostrar.</li>
            @endforelse
        @else
            <li>No hay proyectos para mostrar.</li>
        @endisset 
        
    </ul>
@endsection