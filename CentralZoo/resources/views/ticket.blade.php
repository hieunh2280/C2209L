@extends('layouts.app')

@section('title')
Tickets
@endsection

@section('css')
<link href="{{ asset('css/ticket.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="title">
        <img src="{{ asset('img') }}/penguin.png" width="1200" height="550">
        <h1>BUY TICKET NOW</h1>
    </div>

    <div class="ticket">
        <div class="des" style="background-color: #eeeeee;">
            <div class="cont">
                <h2>Central Zoo Entry</h2>
                <br><br>
                <div class="hea">
                    <b>Duration: </b><span>1 Day</span>
                    <br>
                    <b>Location: </b><span>Central of City</span>
                </div>
                <br><br><br><br><br>
                <p>Come and visit Central Zoo to get up close and personal to native treasures and endangered animals from around the world.</p>
                <br><br>
                <p>Child entry applies for 3-14 year olds, and under 3 year olds are free. All children under the age of 14 must be accompanied by an adult when visiting the Zoo.</p>
                <br><br>
                <p>Central Zoo Entry Tickets purchased online are valid for 12 months from purchase date.</p>
                <br><br>
                <p>If you are looking for tickets to a special event, these can not be booked here. Please visit the booking-office in our zoo for more information.</p>
            </div>
        </div>
        <div class="buy" style="background-color: #88b4be;">
            <div class="book" style="background-color: #c3e4e9;">
                <form action="" method="post">
                    @csrf
                    <h2>Booking Now</h2>
                    <br>
                    <h3>Enter Number of Visitors</h3>
                    <br><br>
                    <div class="booking">
                        <div class="boo">
                            <b id="bo">Adult</b>
                            <input type="number" name="adult_num" min="0" max="30" value="0" autocomplete="off">
                            <span>$27.00</span>
                        </div>

                        <br><br>
                        <div class="boo">
                            <b id="bo">Child </b>
                            <input type="number" name="child_num" min="0" max="30" value="0" autocomplete="off">
                            <span>$12.00</span>
                        </div>

                        <br><br>
                        <div class="boo">
                            <b id="stu">Student </b>
                            <input type="number" name="student_num" min="0" max="30" value="0" autocomplete="off">
                            <span>$20.00</span>
                        </div>

                        <br><br>
                        <div class="boo">
                            <b>Community Card </b>
                            <input type="number" name="com_card_num" min="0" max="30" value="0" autocomplete="off">
                            <span>$20.00</span>
                        </div>

                        <br><br>
                        <div class="boo">
                            <b id="fam">Family </b>
                            <br>
                            <span id="des">2 adults and 2 children</span>
                            <input type="number" name="fam_1_num" min="0" max="30" value="0" autocomplete="off">
                            <span>$66.00</span>
                        </div>
                        
                        <br><br>
                        <div class="boo">
                            <b id="fam">Family </b>
                            <br>
                            <span id="des">2 adults and 1 children</span>
                            <input type="number" name="fam_2_num" min="0" max="30" value="0" autocomplete="off">
                            <span>$55.00</span>
                        </div>
                        
                        <br><br>
                        <div class="boo">
                            <b id="fam">Family </b>
                            <br>
                            <span id="des">1 adult and 2 children</span>
                            <input type="number" name="fam_3_num" min="0" max="30" value="0" autocomplete="off">
                            <span>$55.00</span>
                        </div>

                        
                        <br><br>
                        <div class="boo">
                            <b id="fam">Family </b>
                            <br>
                            <span id="des">2 adults and 3 children</span>
                            <input type="number" name="fam_4_num" min="0" max="30" value="0" autocomplete="off">
                            <span>$80.00</span>
                        </div>
                        
                    </div>
                    @if(Session::has('failed'))
                            {{Session::get('failed')}}
                    @endif
                    <button type="submit" value="order" id="buy">BUY NOW</button>
                    <br><br>
                    <div class="note">
                        <b>Note: </b><span>After your purchase is confirmed, we will email you a confirmation.</span>
                    </div>
                </form>                
            </div>
        </div>
    </div>
@endsection