@extends('layout')

@section('title')
    Gallery - Central Zoo
@endsection

@section('content')
    <div style="text-align: center">
        <h3>
            Gallery
        </h3>
        <div>
            <a href="{{url('/')}}" class="text-decoration-none text-body">
                Home
            </a>
            <span>
                > Gallery
            </span>
        </div>
    </div><hr>
        Add Content
@endsection