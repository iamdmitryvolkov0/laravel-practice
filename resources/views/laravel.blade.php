@extends('layouts.test')

@section('content')
    <div class="container mt-5">
        <div class="jumbotron">
            <h2>Skills dump</h2>
        <ul class="list-group">
            @foreach($skills as $skill)
                <li class="list-group-item"> {{$skill}} </li>
            @endforeach
        </ul>
        </div>
    </div>
@endsection
