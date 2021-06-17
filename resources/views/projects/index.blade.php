@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>{{__('Portfolio')}}</h1>

    @auth
        <a href="{{ route('projects.create') }}">Crear proyecto</a>        
    @endauth
    @include('partials.sessions-status')
    <ul>       
        @isset($projects)
            @forelse ($projects as $project)
                <li><a href="{{ route('projects.show', $project) }}">{{$project->title}}</a> </li>
            @empty
                <li>No hay proyectos para mostrar.</li>
            @endforelse
        @else
            <li>No hay proyectos para mostrar.</li>
        @endisset 

        {{ $projects->links() }}
        
    </ul>
@endsection