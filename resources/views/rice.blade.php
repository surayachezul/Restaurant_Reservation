@extends('layouts.mastermenu')

@section('subcontent')

<?php

    $menu_chicken = [
        [
            'menu_image' => ('/images_folder/bulgogi_beef_deopbap.png'),
            'menu_name' => 'BULGOGI BEEF DEOPBAP',
            'menu_price' => 'RM17'
        ],
        [
            'menu_image' => ('/images_folder/bulgogi_chicken_deopbap.png'),
            'menu_name' => 'BULGOGI CHICKEN DEOPBAP',
            'menu_price' => 'RM16'
    
        ],
        [
            'menu_image' => ('/images_folder/dakgalbi_chicken_deopbap.png'),
            'menu_name' => 'DAKGALBI CHICKEN DEOPBAP',
            'menu_price' => 'RM17'
        ],
        [
            'menu_image' => ('/images_folder/doenjang_jiggae.png'),
            'menu_name' => 'DOENJANG JIGGAE',
            'menu_price' => 'RM17'
        ],
        [
            'menu_image' => ('/images_folder/dolsot_bibimbap.png'),
            'menu_name' => 'DOLSOT BIBIMBAP',
            'menu_price' => 'RM17'
        ],
        [
            'menu_image' => ('/images_folder/hangul_chicken_deopbap.png'),
            'menu_name' => 'HANGUL CHICKEN DEOPBAP',
            'menu_price' => 'RM16'
        ],
        [
            'menu_image' => ('/images_folder/kimchi_bokkeumbap.png'),
            'menu_name' => 'KIMCHI BOKKEUMBAP',
            'menu_price' => 'RM16'
        ],
        [
            'menu_image' => ('/images_folder/kimchi_jiggae.png'),
            'menu_name' => 'KIMCHI JIGGAE',
            'menu_price' => 'RM15'
        ],
        [
            'menu_image' => ('/images_folder/soondubu_jiggae.png'),
            'menu_name' => 'SOONDUBU JIGGAE',
            'menu_price' => 'RM16'
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