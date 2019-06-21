@extends('adminlte::page')

@section('title', 'Profil')

@section('content_header')
    <h1>Profil</h1>
@stop

@section('content')
    <h1>{{ Auth::user()->name }}</h1>
    
    <h2>
    {{ Auth::user()->email }} 
    </h2>
    
    <h3>
    Mendaftar pada : {{ Auth::user()->created_at }}
    </h3>
@stop
