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
        @method('post')
        <div class="form-group row m-3">
            <label class="col-form-label col-sm-2">
                Name:
            </label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}" autocomplete="off">
            </div>
        </div>
        @error('name')
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
        <h6>
            Select Number of Tickets:
        </h6>
        <div class="form-group row m-3">
            <label class="col-form-label col-sm-2">
                Adult <br>(18 and over): 
            </label>
            <div class="col-sm-4">
                <input type="number" class="form-control " name="adult_num" value="0" autocomplete="off">
            </div>
        </div>
        @error('adult_num')
            <div class="alert alert-danger p-1 col-sm-6" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group row m-3">
            <label class="col-form-label col-sm-2">
                Senior <br>(60 and over):
            </label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="senior_num" value="0" autocomplete="off"> 
            </div>
        </div>
        @error('senior_num')
            <div class="alert alert-danger p-1 col-sm-6" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group row m-3">
            <label class="col-form-label col-sm-2">
                Child <br>(under 18):
            </label>
            <div class="col-sm-4">
                <input type="number" class="form-control" name="child_num" value="0" autocomplete="off">
            </div>
        </div>
        @error('child_num')
            <div class="alert alert-danger p-1 col-sm-6" role="alert">
                {{ $message }}
            </div>
        @enderror
        @if(Session::has('failed'))
            <div class="alert alert-danger p-1 col-sm-6" role="alert">
                {{Session::get('failed')}}
            </div>
        @endif
        <div class="form-group row m-3">
            <label class="col-form-label col-sm-2">
                Date:
            </label>
            <div class="col-sm-4">
                <input type="date" class="form-control" name="date" value="{{old('date')}}" autocomplete="on">
            </div>
        </div>
        @error('date')
            <div class="alert alert-danger p-1 col-sm-6" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div>
            <input type="submit" class="btn border btn-light border-3" value="Book Ticket">
            <a href="{{url('/quan/ticket')}}" class="text-decoration-none text-body btn border btn-light border-3">
                Go Back
            </a>
            </button>
        </div>
    </form>
@endsection


