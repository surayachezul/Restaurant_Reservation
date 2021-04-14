@extends('layouts.mastermenu')

@section('content')
<div class="wrapper">
    <div class="title">
        <h4>our menu</h4>
    </div>
    <div class="menu">
        <div class="single-menu">
            <img src="{{url('/images_folder/cheese_ramyun.png')}}" alt="">
            <div class="menu-content">
                <h4>CHEESE RAMYUN <span> RM17</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/hangul_chicken_ramyeon.png')}}" alt="">
            <div class="menu-content">
                <h4>HANGUL CHICKEN RAMYEON <span> RM18</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/jajjangmyun.png')}}" alt="">
            <div class="menu-content">
                <h4>JAJJANGMYUN <span> RM16</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/kimchi_ramyeon.png')}}" alt="">
            <div class="menu-content">
                <h4>KIMCHI RAMYEON <span> RM16</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/rabokki.png')}}" alt="">
            <div class="menu-content">
                <h4>RABOKKI <span> RM15</span></h4>
            </div>
        </div>
    </div>
</div>
    
@endsection