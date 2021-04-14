@extends('layouts.mastermenu')

@section('content')
<div class="wrapper">
    <div class="title">
        <h4>our menu</h4>
    </div>
    <div class="menu">
        <div class="single-menu">
            <img src="{{url('/images_folder/honeyjujube.png')}}" alt="">
            <div class="menu-content">
                <h4>HONEY JUUBE <span> RM7</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/honeyvera.png')}}" alt="">
            <div class="menu-content">
                <h4>HONEY VERA <span> RM7</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/honeylemon.png')}}" alt="">
            <div class="menu-content">
                <h4>HONEY LEMON <span> RM7</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/chocolate-iced.png')}}" alt="">
            <div class="menu-content">
                <h4>CHOCOLATE ICE <span> RM8</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/latte-iced.png')}}" alt="">
            <div class="menu-content">
                <h4>LATTE ICE <span> RM8</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/milkeuti.png')}}" alt="">
            <div class="menu-content">
                <h4>MILK TEA <span> RM8</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/americano-iced.png')}}" alt="">
            <div class="menu-content">
                <h4>AMERICANO ICED <span> RM7</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/drinkingwater.png')}}" alt="">
            <div class="menu-content">
                <h4>DRINKING WATER <span> RM3</span></h4>
            </div>
        </div>
    </div>
</div>
@endsection
