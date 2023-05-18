@extends('layout')

@section('title')
    Animal - Central Zoo
@endsection

@section('content')
    <div style="text-align: center">
        <h3>
            Animal
        </h3>
        <div>
            <a href="{{url('/')}}" class="text-decoration-none text-body">
                Home
            </a>
            <span>
                > Animal
            </span>
        </div>
    </div><hr>
        Add Content
@endsection