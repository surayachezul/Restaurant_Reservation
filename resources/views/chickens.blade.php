@extends('layouts.mastermenu')

@section('content')
    <div class="wrapper">
        <br>
        <div class="title">
            <h4>our menu</h4>
        </div>
        <div class="menu">
    
            <div class="single-menu">
                <img src="{{url('/images_folder/ayam1.png')}}" alt="">
                <div class="menu-content">
                    <h4>K'RAZY SPICY CHEESE FRIED CHICKEN BUMBUK<span> RM51</span></h4>
                </div>
            </div>
            <div class="single-menu">
                <img src="{{url('/images_folder/ayam2.png')}}" alt="">
                <div class="menu-content">
                    <h4>ORIGINAL FRIED CHICKEN BUMBUK<span> RM51</span></h4>
                </div>
            </div>
            <div class="single-menu">
                <img src="{{url('/images_folder/ayam3.png')}}" alt="">
                <div class="menu-content">
                    <h4>HONEY MUSTARD CHEESY BUMBUK<span> RM52</span></h4>
                </div>
            </div>
            <div class="single-menu">
                <img src="{{url('/images_folder/ganjang_wingetes_drummetes.png')}}" alt="">
                <div class="menu-content">
                    <h4>GANJANG WING & DRUMMETES<span> RM10</span></h4>
                </div>
            </div>
            <div class="single-menu">
                <img src="{{url('/images_folder/hangul_chicken.png')}}" alt="">
                <div class="menu-content"><br>
                    <h4>HANGUL CHICKEN <span> RM10</span></h4>
                </div>
            </div>
            <div class="single-menu">
                <img src="{{url('/images_folder/hangul_wingetes_drummetes.png')}}" alt="">
                <div class="menu-content">
                    <h4>HANGUL WINGETES & DURMMETES <span> RM10</span></h4>
                </div>
            </div>
            <div class="single-menu">
                <img src="{{url('/images_folder/soygarlic_chicken.png')}}" alt="">
                <div class="menu-content">
                    <h4>SOYGARLIC CHICKEN<span> RM10</span></h4>
                </div>
            </div>
            <div class="single-menu">
                <img src="{{url('/images_folder/yangyeom_chicken.png')}}" alt="">
                <div class="menu-content">
                    <h4>YANGYEOM CHICKEN<span> RM10</span></h4>
                </div>
            </div>     
        </div>
    </div>
@endsection

