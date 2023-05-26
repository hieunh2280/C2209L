@extends('layouts.app')

@section('title')
Feedback to us!
@endsection

@section('css')
<link href="{{ asset('css/feedback.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <img src="{{ asset('img')}}/toucan.jpg" width="1200" height="550">
        <h1>FEEDBACK</h1>
    </div>

    <div class="feedback">
        <h2>Your opinion will help us improve services in the future</h2>
        <form action="post">
            <div class="feed">
            <div class="back">
                <label>Name:</label>
                <input type="text" id="name" placeholder="Enter your Name">
            </div>
            <div class="back">
                <label>Email:</label>
                <input type="email" id="email" placeholder="Enter your Email">
            </div>
            <div class="back" id="number">
                <label>Phone Number:</label>
                <input type="text" id="phone" placeholder="Enter your Phone Number">
            </div>
            <div class="back" id="opi">
                <label>Opinion:</label>
                <input type="text" id="opinion" placeholder="Enter your Opinion">
            </div>
            <div class="back" id="sub">
                <label></label>
                <button type="submit" id="can">Submit</button>
            </div>
        </div>
        </form>
    </div>
@endsection