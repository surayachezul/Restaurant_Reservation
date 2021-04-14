@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-----CSS Style---->
<link rel="stylesheet" href="{{ URL::asset('css/web.css') }}">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<title>Restaurant Reservation</title>
</head>
<body>
    
    <div class="container">
        <div class="banner">
            <img src="{{url('/images_folder/3.jpg')}}" alt="Image"/>    
        </div>

        <section class="row col p-2">
            <ul class="nav nav-tabs p-3 justify-content-center" id="myTab" role="tablist" method=view>
                <li class="nav-item">
                    <a class="nav-link active" id="chickens-tab" data-toggle="tab" href="#chickens" role="tab" aria-controls="home" aria-selected="true">Chicken</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="rice-tab" data-toggle="tab" href="#rice" role="tab" aria-controls="profile" aria-selected="false">Rice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="noodles-tab" data-toggle="tab" href="#noodles" role="tab" aria-controls="contact" aria-selected="false">Noodle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="topokki-tab" data-toggle="tab" href="#sidedishes" role="tab" aria-controls="contact" aria-selected="false">Side Dish</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab" aria-controls="contact" aria-selected="false">Dessert</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="beverages-tab" data-toggle="tab" href="#beverages" role="tab" aria-controls="contact" aria-selected="false">Beverage</a>
                </li>
            </ul>

            {{--<div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"></div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
            </div>--}}


        </section>
    </div>  
    <div class="container">
        @yield('content')    
    </div> 
</body>
<?php


?>