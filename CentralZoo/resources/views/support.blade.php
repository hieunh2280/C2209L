@extends('layouts.app')
@section('title')
Support Us | Central Zoo
@endsection
@section('css')
<link href="{{ asset('css/support.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <img src="{{ asset('img')}}/us.jpg" width="1200" height="550">
        <h1>SUPPORT US</h1>
    </div>

    <div class="support">
        <div class="us" style="background-color: #f1c0e8;">
            <h2>Donate for Wildlife</h2>
            <div class="picture">
                <div class="pic">
                    <img src="{{ asset('img')}}/elephant.jpg" width="194" height="300">
                    <br><br>
                    <span>Donate for Elephants</span>
                </div>
                <div class="pic">
                    <img src="{{ asset('img')}}/Rhino.jpg" width="194" height="300">
                    <br><br>
                    <span>Support Rhinoceros</span>
                </div>
                <div class="pic">
                    <img src="{{ asset('img')}}/Tiger.jpg" width="194" height="300">
                    <br><br>
                    <span>Big Cats need help</span>
                </div>
                <p>- Every money can make difference for an animal in need.</p>               
                <p>- Your tax-deductible donation will help fight cruelty and make a life-changing difference for animals.</p>
                <p>- Monthly giving is the easiest and most efficient way to make a difference for animals.</p>
            </div>
        </div>
        <div class="us" style="background-color: #cfbaf0;">
            <h2>Buy our Souvenirs</h2>
            <div class="picture">
                <div class="pic">
                    <img src="{{ asset('img')}}/axolotl.jpg" width="194" height="300">
                    <br><br>
                    <span>Stuffed Animals</span>
                </div>
                <div class="pic">
                    <img src="{{ asset('img')}}/glass.jpg" width="194" height="300">
                    <br><br>
                    <span>Glass Cups</span>
                </div>
                <div class="pic">
                    <img src="{{ asset('img')}}/shirt.jpg" width="194" height="300">
                    <br><br>
                    <span>Cat Shirt</span>
                </div>
                <p>- We offer great products and services and also give back to our lifesaving work for animals.</p>
                <p>- If you are looking for cute apparel that showcases your love of all animals and supports our work.</p>
                <p>- 20% of the sale price of items from our store directly benefits our work for animals. </p>
            </div> 
        </div>
    </div>

    <div class="contact" style="background-color: #8eecf5;">
        <h3>CONTACT US</h3>
        <input type="email" id="email" name="email" placeholder="Enter your Email">
        <button type="submit" id="sign">Sign Up</button>
    </div>
    <div class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d245281.87146747462!2d105.71857970146198!3d21.055697193367465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjHCsDAxJzUzLjAiTiAxMDXCsDQ4JzI3LjEiRQ!5e0!3m2!1sen!2s!4v1685283369605!5m2!1sen!2s" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection