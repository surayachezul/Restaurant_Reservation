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

{{--
<div class="wrapper container">
    <div class="title">
        <h4>our menu</h4>
    </div>

    <div class="menu row">
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/bulgogi_beef_deopbap.png')}}" alt="">
            <div class="menu-content">
                <h4>BULGOGI BEEF DEOPBAP <span> RM17</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/bulgogi_chicken_deopbap.png')}}" alt="">
            <div class="menu-content">
                <h4>BULGOGI CHICKEN DEOPBAP <span>  RM16</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/dakgalbi_chicken_deopbap.png')}}" alt="">
            <div class="menu-content">
                <h4>DAKGALBI CHICKEN DEOPBAP <span> RM17</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/doenjang_jiggae.png')}}" alt="">
            <div class="menu-content">
                <h4>DOENJANG JIGGAE <span> RM17</span></h4>
                </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/dolsot_bibimbap.png')}}" alt="">
            <div class="menu-content">
                <h4>DOLSOT BIBIMBAP <span> RM17</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/hangul_chicken_deopbap.png')}}" alt="">
            <div class="menu-content">
                <h4>HANGUL CHICKEN DEOPBAP <span> RM16</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/kimchi_bokkeumbap.png')}}" alt="">
            <div class="menu-content">
                <h4>KIMCHI BOKKEUMBAP <span> RM16</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/kimchi_jiggae.png')}}" alt="">
            <div class="menu-content">
                <h4>KIMCHI JIGGAE <span> RM15</span></h4>
            </div>
        </div>
        <div class="col-md-6 single-menu">
            <img src="{{url('/images_folder/soondubu_jiggae.png')}}" alt="">
            <div class="menu-content">
                <h4>SOONDUBU JIGGAE <span> RM16</span></h4>
            </div>
        </div>
    </div>
</div>
--}}  
@endsection