@extends('layouts.app')

@section('title')
Your information | Center Zoo
@endsection

@section('css')
<link href="{{ asset('css/order.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="order">
        
        <h1>Your Information</h1>
        <div class="form">
            <form method="POST">
            @csrf
                <div class="box">
                    <label>First Name: </label>
                    <input type="text" id="inputbox" name="firstname" placeholder="First Name" value="{{old('firstname')}}" autocomplete="off">
                </div>
                <br>
                @error('firstname')
                    <div class="alert alert-danger p-1 col-sm-6" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <br>
                <div class="box">
                    <label>Last Name: </label>
                    <input type="text" id="inputbox" name="lastname" placeholder="Last Name" value="{{old('lastname')}}" autocomplete="off">
                </div>
                <br>
                @error('lastname')
                    <div class="alert alert-danger p-1 col-sm-6" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <br>
                <div class="box">
                    <label>Email: </label>
                    <input type="email" id="inputbox" name="email" placeholder="Email" value="{{old('email')}}" autocomplete="off">
                </div>
                <br>
                @error('email')
                    <div class="alert alert-danger p-1 col-sm-6" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <br>
                <div class="box">
                    <label>Phone Number: </label>
                    <input type="text" id="inputbox" name="phone"  placeholder="Phone number" value="{{old('phone')}}" autocomplete="off">
                </div>
                <br>
                @error('phone')
                    <div class="alert alert-danger p-1 col-sm-6" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <br>
                <div class="box">
                    <label>Visit Date: </label>
                    <input type="date" id="inputbox">
                </div>
                <br>
                <br>
                <div class="box" id="check">
                    <input type="checkbox" name="membership">Do you want to regist as a community client?
                </div>
                <br>
                @if(Session::has('failed'))
                    <div class="alert alert-danger p-1 col-sm-6" role="alert">
                        {{Session::get('failed')}}
                    </div>
                @endif
                <br>
                <button class="btn" type="submit" value="book">BUY TICKET</button>
                <br>
                <br>
                <br>
                <a onclick="history.go(-1)" class="text-decoration-none text-body btn border btn-light border-3">
                    Go Back
                </a>
            </form>
        </div>
    </div>
@endsection