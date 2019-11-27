@extends('layouts.app')

@section('title')
    Todo: {{ $todo -> name }}
@endsection

@section('content')
    <h2 class="text-center my-4">

        {{ $todo -> name }}
    </h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card card-header bg-secondary text-light">
                    <h3>Details</h3>
                </div>
                <div class="card card-body bg-light">
                    {{ $todo -> description }}
                </div>
            </div>
            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info my-2">Edit</a>
            <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger my-2">Delete</a>
        </div>
    </div>
@endsection