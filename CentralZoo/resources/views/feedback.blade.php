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
        <form method="post">
            @csrf
            <div class="feed">
                <div class="back">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter your Name">
                </div>
                @error('name')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
                <div class="back">
                    <label>Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter your Email">
                </div>
                @error('email')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
                <div class="back" id="number">
                    <label>Phone Number:</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number">
                </div>
                @error('phone')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
                <div class="back" id="opi">
                    <label>Opinion:</label>
                    <input type="text" name="opinion" id="opinion" placeholder="Enter your Opinion">
                </div>
                @error('opinion')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
                @if(Session::has('success'))
                    <div class="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <div class="back" id="sub">
                    <label></label>
                    <button type="submit" id="can">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection