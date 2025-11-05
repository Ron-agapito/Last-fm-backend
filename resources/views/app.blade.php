@extends('layouts.app')

@section('title', 'Admin')

@section('content')

    <div class="text-center">
        <x-title>
            Last FM Admin Panel
        </x-title>
    </div>

    <div class="text-center pt-4">
        <a href="{{$frontendUrl}}?token={{$token}}">
            <x-button>
                Top Artists
            </x-button>
        </a>

    </div>

@endsection
