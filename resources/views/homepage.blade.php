@extends('layouts.master')

<div class="banner">
  <img src="{{url('/images_folder/3.jpg')}}" alt="Image"/>
</div>

<div class="content">
  <div class="container" >

  <br>
  <br>
  <div class = "best-seller">
    <h2 >OUR BESTSELLING!!</h2>
    <img src = "{{url('/images_folder/10.png')}}" alt = "Spicy Cheese Bumbuk Image">
    <br>
    <img src = "{{url('/images_folder/9.png')}}" alt = "Honey Mustard Cheese Bumbuk Image">
  </div>

  <div class = "why-description">
    <h2 class>WHY PEOPLE GO CRAZY!!</h2>
    <p>
    Our chicken are delivered FRESH DAILY, never frozen, ONLY CHILLED.
    Using a unique Korean Double Frying Method, our well marinated Chicken are fried to JUICY, CRISPY PERFECTION!
                        
    Try it in all the 7 different flavours including Korean favourites, Spicy Yangnyeom, Soya Garlic and Honey Butter!
    See Our Menu!
    </p>
    <a href = # class = "btn-seemenu">MENU</a>
    </div>
    
    <br>
    <div class = "food-banner">
      <div class = "best-seller-rice-edition-image">
      <h2>OUR BESTSELLING RICE EDITION!!</h2>
      <img src = "{{url('/images_folder/8.png')}}" alt = "Anchovies&Tuna Riceball Image">
      </div>

      <br>
      <div class = "story-description">
        <h2>Korean Cuisine</h2>
        <p>Korean cuisine is the customary cooking traditions and practices of the 
          culinary arts of Korea. Korean cuisine has evolved through centuries of 
          social and political change. Originating from ancient agricultural and 
          nomadic traditions in Korea and southern Manchuria, Korean cuisine has 
          evolved through a complex interaction of the natural environment and 
          different cultural trends.</p>
        <a href = "aboutus.html" class = "btn-readstory">READ STORY</a>
      </div>
      
      <br>
      <div class = "promotions">
        <h2>APRIL PROMOTIONS!!</h2>
        <img src = "{{url('/images_folder/food_voucher1.jpg')}}" alt = "Voucher Image" style = "width:60%">
        <br>
        
        <br>
        <img src = "{{url('/images_folder/food_voucher2.jpg')}}" alt = "Voucher Image" style = "width:60%">
        <br>
        
        <br>
        <a href = "location.html" class = "btn-location">FIND NEAREST LOCATION</a>
        <br>
        <br>
      </div>
    </div>
  </div>

</div>


<?php


?>


