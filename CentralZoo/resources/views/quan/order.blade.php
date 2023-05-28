@extends('quan.layout')

@section('title')
    Book Ticket - Central Zoo
@endsection

@section('content')
    <h3>
        Book Ticket
    </h3><hr>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <h6>
        Customer Information:
    </h6>
    <form action="" method="post">
        @csrf
        <div class="form-group row m-3">
            <label class="col-form-label col-sm-2">
                First Name:
            </label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="firstname" placeholder="First Name" value="{{old('name')}}" autocomplete="off">
            </div>
        </div>
        @error('firstname')
            <div class="alert alert-danger p-1 col-sm-6" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group row m-3">
            <label class="col-form-label col-sm-2">
                Last Name:
            </label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{old('name')}}" autocomplete="off">
            </div>
        </div>
        @error('lastname')
            <div class="alert alert-danger p-1 col-sm-6" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group row m-3">
            <label class="col-form-label col-sm-2">
                Email:
            </label>
            <div class="col-sm-4">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}" autocomplete="off">
            </div>
        </div>
        @error('email')
            <div class="alert alert-danger p-1 col-sm-6" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group row m-3">
            <label class="col-form-label col-sm-2">
                Your phone number:
            </label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="phone" placeholder="Phone number" value="{{old('name')}}" autocomplete="off">
            </div>
        </div>
        @error('phone')
            <div class="alert alert-danger p-1 col-sm-6" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group row m-3">
            <div class="col m-3"><input type="checkbox" name="membership">Do you want to regist as a community client?</div>
        </div>
        @if(Session::has('failed'))
            <div class="alert alert-danger p-1 col-sm-6" role="alert">
                {{Session::get('failed')}}
            </div>
        @endif
        <div>
            <input type="submit" class="btn border btn-light border-3" value="Book Ticket">
            <a onclick="history.go(-1)" class="text-decoration-none text-body btn border btn-light border-3">
                Go Back
            </a>
            </button>
        </div>
    </form>
@endsection


