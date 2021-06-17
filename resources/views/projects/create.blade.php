@extends('layout')

@section('title','Create project')

@section('content')
    <h1>{{__('Create new project')}}</h1>

    @include('partials.sessions-status')
    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.store') }}">
        @include('projects._form',['btnText' =>'Guardar'])
    </form>

@endsection