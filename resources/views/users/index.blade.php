@extends('layouts.default')

@section('title', 'Users List')
@section('content')

<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach

    @php
        $testing_char = 'Laravel refresh mind';
    @endphp
    @switch($testing_char)
        @case('Laravel refresh mind')
            <p>{{ $testing_char }}</p>
            @break
        @default
            <p>Unknown</p>
    @endswitch
</ul>
@endsection
