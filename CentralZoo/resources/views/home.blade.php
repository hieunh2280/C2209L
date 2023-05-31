@extends('layouts.app')
@section('title')
Home Page | Central Zoo
@endsection
@section('css')
<link href="{{ asset('css/zoo.css') }}" rel="stylesheet">
@endsection
@section('content')
    @if(session('order-success')){
        <script>
            alert('{{ session('order-success') }}');
        </script>
    }
    @endif
    <div class="welcome">
        <img src="{{ asset('img')}}/welcome.jpg"/>
        <div class="text">
            <h1>WELCOME TO CENTRAL ZOO</h1>
            <button onclick="location.href=('./animals')" type="submit" id="learn">LEARN MORE</button>
        </div>
    </div>  

    <div class="plan">
        <div class="box">
            <img src="{{ asset('img')}}/National Geographic Your Shot.jpg" width="450" height="600">
            <h2>Plan your visit -></h2>
        </div>
        <div class="box1">
            <div class="box2">
                <img src="{{ asset('img')}}/clock-png-25779.png" width="60" height="60">
                <div class="box4">
                    <span>Story Time</span>
                    <br>
                    <p id="content">Listen stories about animals and have fun with them at the zoo.</p>
                </div>
                <p id="week">Mon - Fri</p>
                <p id="time">9:00 - 10:00 AM</p>
            </div>
            <div class="box2" id="drip">
                <img src="{{ asset('img')}}/clock-png-25779.png" width="60" height="60">
                <div class="box4">
                    <span>Animals Feeding</span>
                    <br>
                    <p id="content">Buy food and try to make friend with them. They're friendly.</p>
                </div>
                <p id="week">Mon - Sun</p>
                <p id="time">10:30 - 12:00 AM</p>
            </div>
            <div class="box3">
                <div class="box2" id="sub">
                    <img src="{{ asset('img')}}/clock-png-25779.png" width="60" height="60">
                    <div class="box4">
                        <span>Birds Watching</span>
                        <br>
                        <p id="content">Let's listen to the colorfull and talented birds singing.</p>
                    </div>
                    <p id="week">Wed and Sat</p>
                    <p id="time">14:30 - 15:00 PM</p>
                </div>
                <div class="box2" id="up">
                    <img src="{{ asset('img')}}/clock-png-25779.png" width="60" height="60">
                    <div class="box4">
                        <span>Zoo Tour</span>
                        <br>
                        <p id="content">Take time walking with our guidance. You may find something interesting.</p>
                    </div>
                    <p id="week">Tue and Fri</p>
                    <p id="time">15:30 - 16:30 PM</p>
                </div>
                <img id="pic" src="{{ asset('img')}}/clock-png-25779.png" width="60" height="60">
                <div class="box5">
                    <span id="header">Monday to Friday</span>
                    <br>
                    <p id="content">8:30 AM - 17:30 PM</p>
                    <br><br>
                    <span id="header">Saturday and Sunday</span>
                    <br>
                    <p id="content">8:00 AM - 18:00 PM</p>
                </div>
            </div>
        </div>
    </div>

    <div class="events">
        <div class="event">
            <h3>Events</h3>
            <p>It's easy to celebrate big events in 33 arces.</p>
            <div class="ani" >
                <div class="eve" id="eve">
                    <img src="{{ asset('img')}}/gardern.jpg" width="245" height="320">
                    <br><br><br>
                    <p>Secret Gardern</p>
                </div>
                <div class="eve" id="eve">
                    <img src="{{ asset('img')}}/Christmas.jpg" width="245" height="320">
                    <br><br><br>
                    <p>Christmas Party</p>
                </div>
            </div>
        </div>

        <div class="event" style="background-color: #009ccf ;">
            <h3>Animals</h3>
            <p>New animals have arrived! Let's see what we have here...</p>
            <div class="ani">
                <div class="eve">
                    <img src="{{ asset('img')}}/Sleepy Red Panda Floofer.jpg" width="180" height="320">
                    <br><br><br>
                    <p>Red Panda</p>
                </div>
                <div class="eve">
                    <img src="{{ asset('img')}}/capybara.jpg" width="180" height="320">
                    <br><br><br>
                    <p>Capybara</p>
                </div>
                <div class="eve">
                    <img src="{{ asset('img')}}/flamingo.jpg" width="180" height="320">
                    <br><br><br>
                    <p>Flamingo</p>
                </div>
            </div>
        </div>
    </div>

    <div class="events">
        <div class="us">
            <h3>Support Us</h3>
            <p>You can support animals or our products by being a member:</p>
            <div class="now">
                <div class="support">
                    <img src="{{ asset('img')}}/elephant1.jpg" width="150" height="150">
                    <br>
                    <p>Donate for Wildlife</p> 
                </div>
                <div class="support">
                    <img src="{{ asset('img')}}/axol.jpg" width="150" height="150">
                    <br>
                    <p>Buy Souvenir</p> 
                </div>
            </div>
        </div>
        <div class="feedback">
            <h3>Feedback</h3>
            <p>If you have compliment or criticism during your experience, please text us. Customers' feedback can be a helpful method to improve our zoo.</p>
            <br><br><br><br><br>
            <button onclick="location.href=('./feedback')" type="submit" id="feedback">Feedback</button>
        </div>
    </div>
@endsection