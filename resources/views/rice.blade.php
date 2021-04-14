@extends('layouts.mastermenu')

@section('content')
<div class="wrapper">
    <div class="title">
        <h4>our menu</h4>
    </div>
    <div class="menu">
        <div class="single-menu">
            <img src="{{url('/images_folder/bulgogi_beef_deopbap.png')}}" alt="">
            <div class="menu-content">
                <h4>BULGOGI BEEF DEOPBAP <span> RM17</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/bulgogi_chicken_deopbap.png')}}" alt="">
            <div class="menu-content">
                <h4>BULGOGI CHICKEN DEOPBAP <span>  RM16</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/dakgalbi_chicken_deopbap.png')}}" alt="">
            <div class="menu-content">
                <h4>DAKGALBI CHICKEN DEOPBAP <span> RM17</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/doenjang_jiggae.png')}}" alt="">
            <div class="menu-content">
                <h4>DOENJANG JIGGAE <span> RM17</span></h4>
                </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/dolsot_bibimbap.png')}}" alt="">
            <div class="menu-content">
                <h4>DOLSOT BIBIMBAP <span> RM17</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/hangul_chicken_deopbap.png')}}" alt="">
            <div class="menu-content">
                <h4>HANGUL CHICKEN DEOPBAP <span> RM16</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/kimchi_bokkeumbap.png')}}" alt="">
            <div class="menu-content">
                <h4>KIMCHI BOKKEUMBAP <span> RM16</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/kimchi_jiggae.png')}}" alt="">
            <div class="menu-content">
                <h4>KIMCHI JIGGAE <span> RM15</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/soondubu_jiggae.png')}}" alt="">
            <div class="menu-content">
                <h4>SOONDUBU JIGGAE <span> RM16</span></h4>
            </div>
        </div>
    </div>
</div>
    
@endsection