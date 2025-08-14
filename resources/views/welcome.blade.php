@extends('layouts.default')

@section('title', 'Welcome')

@section('content')
    <h1>Laravel Testing by Samuel</h1>
    <p>This is a simple welcome page.</p>
    <img width="200" src="{{ Vite::asset('resources/images/stock-dev-test.jpg') }}" alt="An regular stock image that I've got from the net!!! YAYY">
@endsection
