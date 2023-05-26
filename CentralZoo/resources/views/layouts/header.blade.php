<div class="section">
    <div class="logo">
        <a href="./"><h5>Central Zoo</h5></a>
    </div>
    <div class="select">
        <div class="address">
            <div class="location">
                <img src="{{ asset('img')}}/location-icon-map-png--1.png" width="25" height="25"/>
                <span id="header">Location</span>
                <br>
                <p id="content"> Central of city </p>

            </div>
            <div class="location">
                <img src="{{ asset('img')}}/telephone-png-icon-picture-14.png" width="30" height="30"/>
                <span id="header">Contact Us</span>
                <br>
                <p id="content">0123456789</p>
            </div>
            <button onclick="location.href='./tickets'" type="submit" href="./tickets">BUY TICKET</button>
        </div>
        <div id="menu">
            <ul>
                <li><a style="text-decoration: none" href="{{ route('visit') }}">Plan A Visit</a></li>
                <li><a style="text-decoration: none" href="{{ route('events') }}">Events</a></li>
                <li><a style="text-decoration: none" href="{{ route('animals') }}">Animals</a></li>
                <li><a style="text-decoration: none" href="{{ route('support') }}">Support Us</a></li>
                <li><a style="text-decoration: none" href="{{ route('feedback') }}">Feedback</a></li>
            </ul>
        </div>
    </div>           
</div>