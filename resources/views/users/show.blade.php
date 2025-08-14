@extends('layouts.default')
@section('title', 'User ' . $user->id . ' Details')
@section('content')
    <h1>User {{ $user->id }} Details</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
@endsection
