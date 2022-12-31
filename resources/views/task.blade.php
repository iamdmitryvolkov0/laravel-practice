@extends('layouts.test')

@section('content')
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Todo</h1>
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
                        @if($todo->status->value == 1)
                            <span class="badge bg-success rounded-pill">Completed</span>
                        @else
                            <span class="badge bg-danger rounded-pill">In progress</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
