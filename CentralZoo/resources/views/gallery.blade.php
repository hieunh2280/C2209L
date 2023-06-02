@extends('layouts.app')
@section('title')
Gallery | Central Zoo
@endsection
@section('css')
<link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="animals">
       
            <div class="box1">
                <div class="picture" style="background-color: #faf0f2;">
                    <img src="{{ asset('img')}}/flamingo.jpg" width="390" height="510">


                </div>
                <div class="box3">
                    <div class="box2" style="background-color: #d16e96;">
                        <img src="{{ asset('img')}}/toucan.jpg" width="395" height="250">
                       
                    </div>
                    <div class="box2" style="background-color: #e6b3eb;">
                        <img src="{{ asset('img')}}/Penguin swimming at the window.png" width="395" height="250">
                        
                    </div>
                    <div class="box2" style="background-color: #c675c0;">
                        <img src="{{ asset('img')}}/Secretary Bird.jpg" width="395" height="250">
                        
                    </div>
                    <div class="box2" style="background-color: #6a5fab;">
                        <img src="{{ asset('img')}}/peacock.jpg" width="395" height="250">
                        
                    </div>
                </div>
            </div>
      

   
           
            <div class="box1">
                <div class="picture" style="background-color: #B9CFBA ;">
                    <img src="{{ asset('img')}}/capy.jpg" width="390" height="510">
                    

                </div>
                <div class="box3">
                    <div class="box2" style="background-color: #d4cf69;">
                        <img src="{{ asset('img')}}/redpanda.jpg" width="395" height="250">
                        
                    </div>
                    <div class="box2" style="background-color: #7dac66;">
                        <img src="{{ asset('img')}}/Free Giraffe.jpg" width="395" height="250">
                        
                    </div>
                    <div class="box2" style="background-color: #676d17;">
                        <img src="{{ asset('img')}}/zebra.png" width="395" height="250">
                        
                    </div>
                    <div class="box2" style="background-color: #384d0c;">
                        <img src="{{ asset('img')}}/hippo.jpg" width="395" height="250">
                        
                    </div>
                </div>
            </div>

            <div class="box1">
                <div class="picture" style="background-color: #a580ca;">
                    <img src="{{ asset('img')}}/lion.jpg" width="390" height="510">
                   

                </div>
                <div class="box3">
                    <div class="box2" style="background-color: #b2a3da;">
                        <img src="{{ asset('img')}}/tigers.jpg" width="395" height="250">
                        
                    </div>
                    <div class="box2" style="background-color: #8c5493;">
                        <img src="{{ asset('img')}}/Crocodile.jpg" width="395" height="250">
                       
                    </div>
                    <div class="box2" style="background-color: #361e3b;">
                        <img src="{{ asset('img')}}/sloth.jpg" width="395" height="250">
                      
                    </div>
                    <div class="box2" style="background-color: #71193d;">
                        <img src="{{ asset('img')}}/koala.jpg" width="395" height="250">
                      
                    </div>
                </div>
            </div>
       
    </div>
    <div class="last">
        <button onclick="location.href=('./visit')" type="submit">Plan your visit</button>
    </div>

@endsection