@extends('layouts.default')

@section('content')
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Tasks In Progress</h1>
            <a href="/todo" class="btn btn-outline-secondary">All tasks</a>
            <a href="/todo/done" class="btn btn-outline-success">Done</a>
            <a href="/todo/not-done" class="btn btn-outline-warning">In progress</a>
            <div class="mt-4">
                <a href="/todo/create" class="btn btn-outline-dark">Create new task</a>
            </div>
            <ul class="list-group mt-4">
                @foreach($todos as $todo)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <h4>{{$todo->title}}</h4>
                            <p style="color: #909090">{{$todo->description}}</p>
                        </div>
                            <span class="badge bg-success rounded-pill">{{$todo->status->name}}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
