@extends('layouts.mastermenu')

@section('subcontent')

<?php

    $menu_chicken = [
        [
            'menu_image' => ('/images_folder/cheesy_bulgogi_fries.png'),
            'menu_name' => 'CHEESY BULGOGI FRIES',
            'menu_price' => 'RM12'
        ],
        [
            'menu_image' => ('/images_folder/fried_squid.png'),
            'menu_name' => 'FRIED SQUID',
            'menu_price' => 'RM14'
    
        ],
        [
            'menu_image' => ('/images_folder/kimchi_cheese.png'),
            'menu_name' => 'KIMCHI CHEESE',
            'menu_price' => 'RM16'
        ],
        [
            'menu_image' => ('/images_folder/kimchi_topokki.png'),
            'menu_name' => 'KIMCHI TOPOKKI',
            'menu_price' => 'RM8'
        ],
        [
            'menu_image' => ('/images_folder/soygarlic_cheese.png'),
            'menu_name' => 'SOYGARLIC CHEESE',
            'menu_price' => 'RM10'
        ],
        [
            'menu_image' => ('/images_folder/soygarlic_topokki.png'),
            'menu_name' => 'SOYGARLIC TOPOKKI',
            'menu_price' => 'RM11'
        ],
        [
            'menu_image' => ('/images_folder/tokkochi.png'),
            'menu_name' => 'TOKOCHI',
            'menu_price' => 'RM11'
        ],
        [
            'menu_image' => ('/images_folder/topokki.png'),
            'menu_name' => 'TOPOKKI',
            'menu_price' => 'RM11'
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
                <img src="{{url('/images_folder/cheesy_bulgogi_fries.png')}}" alt="">
                <div class="menu-content">
                    <h4>CHEESY BULGOGI FRIES <span> RM12</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/fried_squid.png')}}" alt="">
                <div class="menu-content">
                    <h4>FRIED SQUID <span> RM14</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/kimchi_cheese.png')}}" alt="">
                <div class="menu-content">
                    <h4>KIMCHI CHEESE <span> RM8</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/kimchi_topokki.png')}}" alt="">
                <div class="menu-content">
                    <h4>KIMCHI TOPOKKI <span> RM10</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/soygarlic_cheese.png')}}" alt="">
                <div class="menu-content">
                    <h4>SOYGARLIC CHEESE <span> RM11</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/soygarlic_topokki.png')}}" alt="">
                <div class="menu-content">
                    <h4>SOYGARLIC TOPOKKI <span> RM11</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/tokkochi.png')}}" alt="">
                <div class="menu-content">
                    <h4>TOKOCHI <span> RM11</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/topokki.png')}}" alt="">
                <div class="menu-content">
                    <h4>TOPOKKI <span> RM11</span></h4>
                </div>
            </div>
            <div class="col-md-6 single-menu">
                <img src="{{url('/images_folder/topokki_cheese.png')}}" alt="">
                <div class="menu-content">
                    <h4>TOPOKKI CHEESE <span> RM12</span></h4>
                </div>
            </div>
        </div>
    </div>
--}}

@endsection

