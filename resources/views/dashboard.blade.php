@extends('layout')

@section('content')
    <h2 style="text-align: center;padding-top: 2em">Welcome, {{ Auth::user()->name }}!</h2>
@endsection