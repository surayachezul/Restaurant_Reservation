@extends('layouts.master')

@section('content')

<section class="row col p-2">
    <ul class="nav nav-tabs p-3 justify-content-center" id="myTab" role="tablist" method=view>
        <li class="nav-item">
            <a class="nav-link {{ (Request::is('menu/chickens', 'menu/chickens/*') ? 'active' : '') }}" id="chickens-tab" data-toggle="tab" href="/menu/chickens" role="tab" aria-controls="home" aria-selected="true">Chicken</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (Request::is('menu/rice', 'menu/rice/*') ? 'active' : '') }}" id="rice-tab" data-toggle="tab" href="/menu/rice" role="tab" aria-controls="profile" aria-selected="false">Rice</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (Request::is('menu/noodles', 'menu/rice/*') ? 'active' : '') }}" id="noodles-tab" data-toggle="tab" href="/menu/noodles" role="tab" aria-controls="contact" aria-selected="false">Noodle</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (Request::is('menu/sidedishes', 'menu/rice/*') ? 'active' : '') }}" id="topokki-tab" data-toggle="tab" href="/menu/sidedishes" role="tab" aria-controls="contact" aria-selected="false">Side Dish</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (Request::is('menu/desserts', 'menu/rice/*') ? 'active' : '') }}" id="desserts-tab" data-toggle="tab" href="/menu/desserts" role="tab" aria-controls="contact" aria-selected="false">Dessert</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (Request::is('menu/beverages', 'menu/rice/*') ? 'active' : '') }}" id="beverages-tab" data-toggle="tab" href="/menu/beverages" role="tab" aria-controls="contact" aria-selected="false">Beverage</a>
        </li>
    </ul>

    {{--<div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"></div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
    </div>--}}


</section>

@yield('subcontent')    

</div>  

@endsection
