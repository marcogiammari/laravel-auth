@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 p-5">
                <img class="w-100" src="{{ $project->image }}" alt="{{ $project->name }}">
            </div>
            <div class="col-12 col-lg-6 p-5 d-flex flex-column">
                <h2>{{ $project->name }}</h2>
                <hr>
                <p><span class="fw-bold">Stack</span>: {{ $project->stack }}</p>
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection
