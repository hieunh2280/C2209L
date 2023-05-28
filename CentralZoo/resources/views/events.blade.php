@extends('layouts.app')
@section('title')
Events
@endsection
@section('css')
<link href="{{ asset('css/events.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <img src="{{ asset('img')}}/10 Best and Most Beautiful Oxford Colleges.jpg" width="1200" height="640">
        <h1>EVENTS</h1>
    </div>

    <div class="eve">
        <div class="picture">
            <img src="{{ asset('img')}}/gardern.jpg" width="300" height="430">
            <br>
            <span>Secret Garden</span>
        </div>
        <div class="des">
            <p>Come join with us in palace, there is something waiting for you. However, you have to get through the maze in the gardern - surounded by beautifull flowers. Try not to get lost and you will have your prize. Step forward, hope the prize will find its worthy owner! </p>
            <button type="submit">BUY TICKET</button>
        </div>
    </div>

    <div class="eve" id="after">
        <div class="picture">
            <img src="{{ asset('img')}}/Christmas.jpg" width="300" height="430">
            <br>
            <span>Christmas Party</span>
        </div>
        <div class="des">
            <p>ONLY ON DECEMBER! The cozy atmosphere in the castle is perfectly suitable for party, dinner and so on. You only need to immerse yourselves in the light of chandelier and enjoy with family and friends.</p>
            <button type="submit" id="des">BUY TICKET</button>
        </div>
    </div>
@endsection        