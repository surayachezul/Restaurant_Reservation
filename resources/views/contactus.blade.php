@extends('layouts.master')

<div class="banner">

  <img src="{{url('/images_folder/3.jpg')}}" alt="Image"/>

</div>

<div class="form-content">
    <div class="container">

        @if(Session::has('flash_message'))
        <div class="alert alert-success mt-2">
            {{ Session::get('flash_message') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger mt-2">
          @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
          @endforeach
        </div>
        @endif

        <section class="row col p-2">
        <br>
        <h1>Contact Us</h1>
        <h5>Leave Us A Message!</h5>

            <form action="/contactus" method="post" >
            @csrf
                <div class="form-group row">
                    <label for="nameid" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input name="name" value="{{old('name')}}" placeholder = "Full Name" type="text" class="form-control" id="nameid">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="nameid" class="col-sm-3 col-form-label">Phone Number</label>
                    <div class="col-sm-9">
                    <input name="phone_no" value="{{old('phone_no')}}" placeholder = "Phone Number" type="int" class="form-control" id="phoneno">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="dateid" class="col-sm-3 col-form-label">Date</label>
                    <div class="col-sm-9">
                        <input name="date" value="{{old('date')}}" placeholder = "yyyy-mm-dd" type="date" class="form-control" id="dateid">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="titleid" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input name="title" value="{{old('title')}}" type="text" placeholder = "Title" class="form-control" id="titleid">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="messageid" class="col-sm-3 col-form-label">Message</label>
                    <div class="col-sm-9">
                        <textarea name="message" value="{{old('message')}}" placeholder = "Message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-primary" href = "submitform">Submit</button>
                    </div>
                </div>
            </form>
        </section>
    </div>   
</div>

<?php


?>