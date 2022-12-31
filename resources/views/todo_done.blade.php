@extends('layouts.test')

@section('content')
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Tasks Done</h1>
            <a href="/todo">All tasks</a>
            <a href="/todo/done">Done</a>
            <a href="/todo/not-done">In progress</a>
            <ul class="list-group mt-4">
                @foreach($todos as $todo)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <h4>{{$todo->title}}</h4>
                            <p style="color: #909090">{{$todo->description}}</p>
                        </div>
                            <span class="badge bg-danger rounded-pill">Done</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
