@extends('layouts.app')

@section('title')
    Todos List
@endsection

@section('content')
    <h1 class="text-center my-4">TODOS PAGE</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card card-header">
                    TODO
                </div>

                <div class="card card-body">
                    <ul class="list-group">
                        @foreach ($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}

                                <a href="todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-sm-right">View</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection