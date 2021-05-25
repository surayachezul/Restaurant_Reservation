@extends('layouts.mastermenu')

@section('subcontent')

<?php

    $menu_chicken = [
        [
            'menu_image' => ('/images_folder/cheese_ramyun.png'),
            'menu_name' => 'CHEESE RAMYUN',
            'menu_price' => 'RM17'
        ],
        [
            'menu_image' => ('/images_folder/hangul_chicken_ramyeon.png'),
            'menu_name' => 'HANGUL CHICKEN RAMYEON',
            'menu_price' => 'RM18'
    
        ],
        [
            'menu_image' => ('/images_folder/jajjangmyun.png'),
            'menu_name' => 'JAJJANGMYUN',
            'menu_price' => 'RM16'
        ],
        [
            'menu_image' => ('/images_folder/kimchi_ramyeon.png'),
            'menu_name' => 'KIMCHI RAMYEON',
            'menu_price' => 'RM16'
        ],
        [
            'menu_image' => ('/images_folder/rabokki.png'),
            'menu_name' => 'RABOKKI',
            'menu_price' => 'RM15'
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