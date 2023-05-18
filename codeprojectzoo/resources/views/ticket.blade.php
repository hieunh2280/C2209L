@extends('layout')

@section('title')
    Ticket - Central Zoo
@endsection

@section('content')
    <div style="text-align: center">
        <h3>
            Ticket
        </h3>
        <div>
            <a href="{{url('/')}}" class="text-decoration-none text-body">
                Home
            </a>
            <span>
                > Ticket
            </span>
        </div><hr>
    </div>
    <div class="row m-3 d-flex justify-content-center" style="text-align: center">
        <div class="col-sm-3 p-3 m-3 card">
            <h3>
                Adult
            </h3>
            <h6>
                (18 and over)
            </h6>
            <p>
                $100
            </p>
        </div>
        <div class="col-sm-3 p-3 m-3 card">
            <h3>
                Senior
            </h3>
            <h6>
                (60 and over)
            </h6>
            <p>
                $80
            </p>
        </div>
        <div class="col-sm-3 p-3 m-3 card">
            <h3>
                Child
            </h3>
            <h6>
                (Under 18)
            </h6>
            <p>
                $50
            </p>
        </div>
    </div>
    <div style="text-align: center">
        <a href="{{url('/ticket/order')}}" class="text-decoration-none text-body btn btn-light border border-3">
            Book Ticket
        </a>
    </div>
@endsection

