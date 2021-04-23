@extends('layouts.mastermenu')

@section('subcontent')

<?php

    $menu_chicken = [
        [
            'menu_image' => ('/images_folder/ayam1.png'),
            'menu_name' => 'KRAZY SPICY CHEESE FRIED CHICKEN BUMBUK',
            'menu_price' => 'RM51'
        ],
        [
            'menu_image' => ('/images_folder/ayam2.png'),
            'menu_name' => 'ORIGINAL FRIED CHICKEN BUMBUK',
            'menu_price' => 'RM51'
    
        ],
        [
            'menu_image' => ('/images_folder/ayam3.png'),
            'menu_name' => 'HONEY MUSTARD CHEESY BUMBUK',
            'menu_price' => 'RM52'
        ],
        [
            'menu_image' => ('/images_folder/ganjang_wingetes_drummetes.png'),
            'menu_name' => 'GANJANG WING & DRUMMETES',
            'menu_price' => 'RM10'
        ],
        [
            'menu_image' => ('/images_folder/hangul_chicken.png'),
            'menu_name' => 'HANGUL CHICKEN',
            'menu_price' => 'RM10'
        ],
        [
            'menu_image' => ('/images_folder/hangul_wingetes_drummetes.png'),
            'menu_name' => 'HANGUL WINGETES & DURMMETES',
            'menu_price' => 'RM10'
        ],
        [
            'menu_image' => ('/images_folder/soygarlic_chicken.png'),
            'menu_name' => 'SOYGARLIC CHICKEN',
            'menu_price' => 'RM10'
        ],
        [
            'menu_image' => ('/images_folder/yangyeom_chicken.png'),
            'menu_name' => 'YANGYEOM CHICKEN',
            'menu_price' => 'RM10'
        ]
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

    {{--<div class="wrapper container">
        <br>
        <div class="title">
            <h4>our menu</h4>
        </div>
        
        <div class="menu row">   
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/ayam1.png')}}" alt="">
                <div class="menu-content">
                    <h4>K'RAZY SPICY CHEESE FRIED CHICKEN BUMBUK<span> RM51</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/ayam2.png')}}" alt="">
                <div class="menu-content">
                    <h4>ORIGINAL FRIED CHICKEN BUMBUK<span> RM51</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/ayam3.png')}}" alt="">
                <div class="menu-content">
                    <h4>HONEY MUSTARD CHEESY BUMBUK<span> RM52</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/ganjang_wingetes_drummetes.png')}}" alt="">
                <div class="menu-content">
                    <h4>GANJANG WING & DRUMMETES<span> RM10</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/hangul_chicken.png')}}" alt="">
                <div class="menu-content"><br>
                    <h4>HANGUL CHICKEN <span> RM10</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/hangul_wingetes_drummetes.png')}}" alt="">
                <div class="menu-content">
                    <h4>HANGUL WINGETES & DURMMETES <span> RM10</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/soygarlic_chicken.png')}}" alt="">
                <div class="menu-content">
                    <h4>SOYGARLIC CHICKEN<span> RM10</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/yangyeom_chicken.png')}}" alt="">
                <div class="menu-content">
                    <h4>YANGYEOM CHICKEN<span> RM10</span></h4>
                </div>
            </div>     
        </div>
    </div>--}}
@endsection


