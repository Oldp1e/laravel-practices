@extends('layouts.default')

@section('content')
<h1>Users</h1>
<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach

    @php
        $testing_char = 'Hello Worlds';
    @endphp
    @switch($testing_char)
        @case('Hello World')
            <p>{{ $testing_char }}</p>
            @break
        @default
            <p>Unknown</p>
    @endswitch
</ul>

