@extends('layouts.app')

$section('title', 'novo curso')
    
@section('content')
    <h1>Novo curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">
        @include('curso._form', ['buttonText' => 'Criar curso'])
    </form>
@endsection