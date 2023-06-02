@extends('layouts.app')
@section('title')
Animals | Central Zoo
@endsection
@section('css')
<link href="{{ asset('css/animals.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <img src="{{ asset('img')}}/title.jpg" width="1200" height="500">
        <h1>MEET THE ANIMALS</h1>
    </div>

    <div class="animals">
        <div class="box">
            <h2>Birds</h2>
            <div class="box1">
                <div class="picture" style="background-color: #faf0f2;">
                    <img src="{{ asset('img')}}/flamingo.jpg" width="390" height="510">
                    <div class="line">
                        <h3>Flamingo</h3>
                        <p>Flamingos are famous for their bright pink feathers, stilt-like legs, and S-shaped neck.</p>
                    </div>

                </div>
                <div class="box3">
                    <div class="box2" style="background-color: #d16e96;">
                        <img src="{{ asset('img')}}/toucan.jpg" width="395" height="250">
                        <div class="line1">
                            <h3>Toucan</h3>
                            <p>Toucan, the most well known tropical bird, is a symbol of playfulness and intelligence.</p>
                        </div>
                    </div>
                    <div class="box2" style="background-color: #e6b3eb;">
                        <img src="{{ asset('img')}}/Penguin swimming at the window.png" width="395" height="250">
                        <div class="line1">
                            <h3>Penguin</h3>
                            <p>Flightless sea birds, can be many different colors from the chest up. Mostly have black backs and white fronts. </p>
                        </div>
                    </div>
                    <div class="box2" style="background-color: #c675c0;">
                        <img src="{{ asset('img')}}/Secretary Bird.jpg" width="395" height="250">
                        <div class="line1">
                            <h3>Secretary Bird</h3>
                            <p>They may spend their days on the ground, but secretary birds are good fliers and nest and roost high up in acacia trees at night.</p>
                        </div>
                    </div>
                    <div class="box2" style="background-color: #6a5fab;">
                        <img src="{{ asset('img')}}/peacock.jpg" width="395" height="250">
                        <div class="line1">
                            <h3>Peacock</h3>
                            <p>Peacocks are large, colorful pheasants (typically blue and green) known for their iridescent tails.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <h2>Other Animals</h2>
            <div class="box1">
                <div class="picture" style="background-color: #B9CFBA ;">
                    <img src="{{ asset('img')}}/capy.jpg" width="390" height="510">
                    <div class="line">
                        <h3>Capybara</h3>
                        <p>Capybaras are vocal animals. They roam the swampy, grassy regions bordering rivers, ponds, streams, and lakes. </p>
                    </div>

                </div>
                <div class="box3">
                    <div class="box2" style="background-color: #d4cf69;">
                        <img src="{{ asset('img')}}/redpanda.jpg" width="395" height="250">
                        <div class="line1">
                            <h3>Red Panda</h3>
                            <p>The red panda is slightly larger than a domestic cat with a bear-like body and thick russet fur.</p>
                        </div>
                    </div>
                    <div class="box2" style="background-color: #7dac66;">
                        <img src="{{ asset('img')}}/Free Giraffe.jpg" width="395" height="250">
                        <div class="line1">
                            <h3>Giraffe</h3>
                            <p>Giraffes are the world's tallest mammals, thanks to their towering legs and long necks.</p>
                        </div>
                    </div>
                    <div class="box2" style="background-color: #676d17;">
                        <img src="{{ asset('img')}}/zebra.png" width="395" height="250">
                        <div class="line1">
                            <h3>Zebra</h3>
                            <p>They are sturdy, spirited animals that are a study in contrasts: willful and playful, social and standoffish, resilient and vulnerable.</p>
                        </div>
                    </div>
                    <div class="box2" style="background-color: #384d0c;">
                        <img src="{{ asset('img')}}/hippo.jpg" width="395" height="250">
                        <div class="line1">
                            <h3>Hippopotamus</h3>
                            <p>These huge herbivores are known for their enormous teeth, aggressive nature, and the myth that they sweat blood.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box1">
                <div class="picture" style="background-color: #a580ca;">
                    <img src="{{ asset('img')}}/lion.jpg" width="390" height="510">
                    <div class="line">
                        <h3>Lion</h3>
                        <p>For all of their roaring, growling, and ferociousness, lions are family animals and truly social in their own communities.</p>
                    </div>

                </div>
                <div class="box3">
                    <div class="box2" style="background-color: #b2a3da;">
                        <img src="{{ asset('img')}}/tigers.jpg" width="395" height="250">
                        <div class="line1">
                            <h3>Tiger</h3>
                            <p>Across their range, tigers face unrelenting pressures from poaching, retaliatory killings, and habitat loss.</p>
                        </div>
                    </div>
                    <div class="box2" style="background-color: #8c5493;">
                        <img src="{{ asset('img')}}/Crocodile.jpg" width="395" height="250">
                        <div class="line1">
                            <h3>Crocodile</h3>
                            <p>All crocodiles have a relatively long snout, or muzzle, which varies considerably in shape and proportion.</p>
                        </div>
                    </div>
                    <div class="box2" style="background-color: #361e3b;">
                        <img src="{{ asset('img')}}/sloth.jpg" width="395" height="250">
                        <div class="line1">
                            <h3>Sloth</h3>
                            <p>Sloths have an exceptionally low metabolic rate and spend 15 to 20 hours per day sleeping.</p>
                        </div>
                    </div>
                    <div class="box2" style="background-color: #71193d;">
                        <img src="{{ asset('img')}}/koala.jpg" width="395" height="250">
                        <div class="line1">
                            <h3>Koala</h3>
                            <p>When not sleeping, they’re usually eating. They rely on the eucalyptus tree for both habitat and food.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="last">
        <button onclick="location.href=('./visit')" type="submit">Plan your visit</button>
    </div>

@endsection