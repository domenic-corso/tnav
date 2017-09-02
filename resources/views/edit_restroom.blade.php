@extends('layouts.app')

@section('title', 'Edit Restroom')

@section('styles')
    <link href="{{ url('/css/restroom_input.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <h1>Update Restroom: {{ $restroom->name }}</h1>
        <a class="btn btn-danger" href="{{ url('/delete-restroom/'.$restroom->id) }}"> Delete </a>
        @include('partials.errors')
        <form action="{{ url('/edit/'.$restroom->id) }}" method="post">
            @include('partials.restroom_input', $restroom)
            {{ csrf_field() }}
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ url('/js/tnav.location.js') }}"></script>
    <script src="{{ url('/js/restroom_input.js') }}"></script>
@endsection
