@extends('layouts.app')

@section('title', 'Add Restroom')

@section('styles')
    <link href="{{ url('/css/restroom_input.css') }}" rel="stylesheet" />
    <link href="{{ url('/lib/custom-checkbox/custom-checkbox.css') }}"  rel="stylesheet" />
@endsection

@section('content')
    <div class="container">
        <h1>Add Restroom</h1>
        @include('partials.errors')
        <!-- Display 'Add Restroom' form -->
        <form action="{{ url('/add-restroom') }}" method="post" enctype="multipart/form-data">
            @include('partials.restroom_input')
            {{ csrf_field() }}
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ url('/js/tnav.location.js') }}"></script>
    <script src="{{ url('/js/tnav.restroomInput.js') }}"></script>
    <script src="{{ url('/lib/custom-checkbox/custom-checkbox.js') }}"></script>
@endsection
