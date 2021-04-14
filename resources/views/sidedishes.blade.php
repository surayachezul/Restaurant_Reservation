@extends('layouts.mastermenu')

@section('content')
<div class="wrapper">
    <div class="title">
        <h4>our menu</h4>
    </div>
    <div class="menu">
        <div class="single-menu">
            <img src="{{url('/images_folder/cheesy_bulgogi_fries.png')}}" alt="">
            <div class="menu-content">
                <h4>CHEESY BULGOGI FRIES <span> RM12</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/fried_squid.png')}}" alt="">
            <div class="menu-content">
                <h4>FRIED SQUID <span> RM14</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/kimchi_cheese.png')}}" alt="">
            <div class="menu-content">
                <h4>KIMCHI CHEESE <span> RM8</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/kimchi_topokki.png')}}" alt="">
            <div class="menu-content">
                <h4>KIMCHI TOPOKKI <span> RM10</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/soygarlic_cheese.png')}}" alt="">
            <div class="menu-content">
                <h4>SOYGARLIC CHEESE <span> RM11</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/soygarlic_topokki.png')}}" alt="">
            <div class="menu-content">
                <h4>SOYGARLIC TOPOKKI <span> RM11</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/tokkochi.png')}}" alt="">
            <div class="menu-content">
                <h4>TOKOCHI <span> RM11</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/topokki.png')}}" alt="">
            <div class="menu-content">
                <h4>TOPOKKI <span> RM11</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/topokki_cheese.png')}}" alt="">
            <div class="menu-content">
                <h4>TOPOKKI CHEESE <span> RM12</span></h4>
            </div>
        </div>
    </div>
</div>
@endsection

