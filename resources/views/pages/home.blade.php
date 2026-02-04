@extends('layout')

@section('title')
    Home
@endsection

@section('content')
    <div id="home-page" class="relative mt-5 flex h-[full] w-[full] flex-col items-center text-center">
        <h1 class="mb-6 text-4xl font-bold">{{ $heading }}</h1>
        <!-- Laravel Logo -->
        <div class="flex h-auto w-auto items-center justify-center gap-4" x-on:click="$store.ui.showConfettiEffect()">
            <style>
                @keyframes softBounce {

                    0%,
                    100% {
                        transform: translateY(0);
                    }

                    50% {
                        transform: translateY(-6px);
                    }
                }

                .soft-bounce {
                    animation: softBounce 3s ease-in-out infinite;
                }
            </style>
            <img src="{{ asset('assets/laravel-logo.svg') }}" alt="Laravel logo"
                class="soft-bounce mb-6 h-auto w-48 motion-safe:animate-none" />
        </div>
        <div class="mb-6">@include('components.counter.counter')</div>
        <button hx-get="https://jsonplaceholder.typicode.com/users" hx-target="#result"
            class="rounded-lg bg-blue-500 p-2 text-white">
            Click to Test HTMX
        </button>

        <!-- This will display the response from the server -->
        <div id="result" class="mt-4 rounded bg-white p-4 shadow">
            <!-- Server response will be displayed here -->
        </div>
    </div>
@endsection
