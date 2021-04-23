@extends('layouts.mastermenu')

@section('subcontent')

<?php

    $menu_chicken = [
        [
            'menu_image' => ('/images_folder/bingsu1.png'),
            'menu_name' => 'MANGO BINGSOO',
            'menu_price' => 'RM24'
        ],
        [
            'menu_image' => ('/images_folder/bingsu2.png'),
            'menu_name' => 'WATERMELON BINGSOO',
            'menu_price' => 'RM24'
    
        ],
        [
            'menu_image' => ('/images_folder/bingsu3.png'),
            'menu_name' => 'HONEYDEW BINGSOO',
            'menu_price' => 'RM25'
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

{{--
<div class="wrapper container">
    <div class="title">
        <h4>our menu</h4>
    </div>

    <div class="menu row">
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/bingsu1.png')}}" alt="">
            <div class="menu-content">
                <h4>MANGO BINGSOO <span> RM24</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/bingsu2.png')}}" alt="">
            <div class="menu-content">
                <h4>WATERMELON BINGSOO <span> RM24</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/bingsu3.png')}}" alt="">
            <div class="menu-content">
                <h4>HONEYDEW BINGSOO <span> RM25</span></h4>
            </div>
        </div>
    </div>
</div>
--}}

@endsection