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
@endsection