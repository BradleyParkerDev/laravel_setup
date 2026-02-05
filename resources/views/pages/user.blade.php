@extends('layout')

@section('title')
    user
@endsection

@section('content')
    <div id="user-page" class="relative mt-5 flex h-[full] w-[full] flex-col items-center text-center">
        <h1>{{ $heading }}</h1>
        user id: {{ $userId }}
    </div>
@endsection
