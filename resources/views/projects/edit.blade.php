@extends('layout')

@section('title','Edit project')

@section('content')
    <h1>{{__('Edit project')}}</h1>

    @include('partials.sessions-status')
    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.update', $project) }}">
        @method('PATCH')
      
        @include('projects._form', ['btnText' => 'Actualizar'])
    </form>

@endsection