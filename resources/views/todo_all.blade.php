@extends('layouts.default')

@section('content')
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">All tasks</h1>
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
                            {{--                            <small>{{$todo->created_at->format('d.m.Y')}}</small>--}}
                            <h4>{{$todo->title}}</h4>
                            <p style="color: #909090">{{$todo->description}}</p>
                        </div>
                        @if($todo->status->value == 1)
                            <h4><span class="badge bg-warning text-dark rounded-pill">In progress</span></h4>
                        @endif
                        @if($todo->status->value == 2)
                            <h4><span class="badge bg-success  rounded-pill">Done</span></h4>
                        @endif
                    </li>
                    <div>
                        <form action="/todo/update" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$todo->id}}">
                            <button type="submit" class="btn btn-outline-success mt-3 mb-3">Done</button>
                        </form>

                        <form action="/todo/delete" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$todo->id}}">
                            <button type="submit" class="btn btn-outline-danger mb-3">Delete</button>
                        </form>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
