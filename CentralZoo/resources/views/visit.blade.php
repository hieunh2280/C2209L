@extends('layouts.app')
@section('title')
Plan your vist! | Central Zoo
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css') }}/visit.css">
@endsection
@section('content')
    <div class="title">
        <img src="{{ asset('img')}}/visit.jpg" width="1200" height="550">
        <h1>PLAN YOUR VISIT</h1>
    </div>

    <div class="visit">
        <h2>Try our activies</h2>
        <div class="box" style="background-color: #ee8c68;">
            <img src="{{ asset('img')}}/Capybara memes.jpg" id="box" width="400" height="300">
            <br><br><br>
            <span>Petting Capybaras</span>
        </div>
        <div class="box" style="background-color: #ba443c;">
            <img src="{{ asset('img')}}/Tumblr.png" id="box" width="400" height="300">
            <br><br><br>
            <span>Cuddling the Cubs</span>
        </div>
        <div class="box" style="background-color: #ab1e3e;">
            <img src="{{ asset('img')}}/penguins.jpg" width="300" height="400">
            <br><br><br>
            <span>Watching Peguins</span>
        </div>
        <div class="box" style="background-color: #96a46b;">
            <img src="{{ asset('img')}}/giraffe.png" width="300" height="400">
            <br><br><br>
            <span>Feeding Giraffes</span>
        </div>
        <h2>Activies for kids</h2>
        <div class="box" style="background-color: #72282b;">
            <img src="{{ asset('img')}}/move.png" id="box1" width="300" height="400">
            <br><br>
            <span>Move Like An Animal</span>
            <br><br>
            <p>Roll a dice, and let's see what animal will your kids move like.</p>
        </div>
        <div class="box" style="background-color: #204132;">
            <img src="{{ asset('img')}}/hunt.png" id="box1" width="300" height="400">
            <br><br>
            <span>Zoo Scavenger Hunt</span>
            <br><br>
            <p>Walk along the zoo, and let's find out how many animals are there.</p>
        </div>
    </div>

    <div class="last">
        <button onclick="location.href=('./tickets')" type="submit">BUY TICKET</button>
    </div>
@endsection