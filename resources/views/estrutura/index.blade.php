@extends('layouts.app')

@section('title', 'Estrutura')

@section('content')
    <h1>Menu</h1>
    <div>
        <a href="{{ route('cursos.index') }}" style="margin-left: 8px;"><button type="submit" class="btn">{{ $buttonText ?? 'Cursos' }}</button> </a>
    </div>

@endsection