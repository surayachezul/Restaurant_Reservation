@extends('layouts.mastermenu')

@section('subcontent')

<?php

    $menu_chicken = [
        [
            'menu_image' => ('/images_folder/honeyjujube.png'),
            'menu_name' => 'HONEY JUUBE',
            'menu_price' => 'RM7'
        ],
        [
            'menu_image' => ('/images_folder/honeyvera.png'),
            'menu_name' => 'HONEY VERA',
            'menu_price' => 'RM7'
    
        ],
        [
            'menu_image' => ('/images_folder/honeylemon.png'),
            'menu_name' => 'HONEY LEMON',
            'menu_price' => 'RM7'
        ],
        [
            'menu_image' => ('/images_folder/chocolate-iced.png'),
            'menu_name' => 'CHOCOLATE ICE',
            'menu_price' => 'RM8'
        ],
        [
            'menu_image' => ('/images_folder/latte-iced.png'),
            'menu_name' => 'LATTE ICE',
            'menu_price' => 'RM8'
        ],
        [
            'menu_image' => ('/images_folder/milkeuti.png'),
            'menu_name' => 'MILK TEA',
            'menu_price' => 'RM8'
        ],
        [
            'menu_image' => ('/images_folder/americano-iced.png'),
            'menu_name' => 'AMERICANO ICED',
            'menu_price' => 'RM7'
        ],
        [
            'menu_image' => ('/images_folder/drinkingwater.png'),
            'menu_name' => 'DRINKING WATER',
            'menu_price' => 'RM3'
        ],
        [
            'menu_image' => ('/images_folder/topokki_cheese.png'),
            'menu_name' => 'TOPOKKI CHEESE',
            'menu_price' => 'RM12'
        ],
    ]
    
?>
    <h4 class = "title" style= "justify-content-center">Our Menu</h4>
    
    <div class = "menu row">
        @foreach($menu_chicken as $menu)
        <div class = "col-md-6 single-menu">
            <img src = {{$menu['menu_image']}}>
            <div class="menu-content">
                {{ $menu['menu_name'] }}
                {{ $menu['menu_price'] }}
            </div>
        </div>
        @endforeach
    </div>

{{--
<div class="wrapper container">
    <div class="title">
        <h4>our menu</h4>
    </div>
    <div class="menu row">
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/honeyjujube.png')}}" alt="">
            <div class="menu-content">
                <h4>HONEY JUUBE <span> RM7</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/honeyvera.png')}}" alt="">
            <div class="menu-content">
                <h4>HONEY VERA <span> RM7</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/honeylemon.png')}}" alt="">
            <div class="menu-content">
                <h4>HONEY LEMON <span> RM7</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/chocolate-iced.png')}}" alt="">
            <div class="menu-content">
                <h4>CHOCOLATE ICE <span> RM8</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/latte-iced.png')}}" alt="">
            <div class="menu-content">
                <h4>LATTE ICE <span> RM8</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/milkeuti.png')}}" alt="">
            <div class="menu-content">
                <h4>MILK TEA <span> RM8</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/americano-iced.png')}}" alt="">
            <div class="menu-content">
                <h4>AMERICANO ICED <span> RM7</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/drinkingwater.png')}}" alt="">
            <div class="menu-content">
                <h4>DRINKING WATER <span> RM3</span></h4>
            </div>
        </div>
    </div>
</div>
--}}
@endsection
