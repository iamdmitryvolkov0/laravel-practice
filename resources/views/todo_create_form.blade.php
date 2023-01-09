@extends('layouts.default')

@section('content')
    <div class="container mt-5">

        <h1 class="display-4">Create new task</h1>
        <div class="mt-5">
            <a href="/todo" class="btn btn-outline-secondary">All tasks</a>
            <a href="/todo/done" class="btn btn-outline-success">Done</a>
            <a href="/todo/not-done" class="btn btn-outline-warning">In progress</a>
        </div>
    </div>
    <div class="container mt-5">
        <form method="POST" action="/todo">
            @csrf
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" id="Title">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" id="Description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add new task</button>
            </>
    </div>
    </form>
@endsection
