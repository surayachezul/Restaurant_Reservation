@extends('layouts.master')

<div class="banner">

  <img src="{{url('/images_folder/3.jpg')}}" alt="Image"/>

</div>

<div class="form-content">
    <div class="container">
        <section class="row col p-2">
        <h1>Contact Us Page</h1>
        <h5>Leave Us A Message!</h5>

            <form method="post" action="/games" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="nameid" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input name="name" type="text" class="form-control" id="nameid">
                    </div>
                </div>
                <p></p>
                <div class="form-group row">
                    <label for="dateid" class="col-sm-3 col-form-label">Date</label>
                    <div class="col-sm-9">
                        <input name="date" type="text" class="form-control" id="dateid">
                    </div>
                </div>
                <p></p>
                <div class="form-group row">
                    <label for="titleid" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input name="title" type="text" class="form-control" id="titleid">
                    </div>
                </div>
                <p></p>
                <div class="form-group row">
                    <label for="messageid" class="col-sm-3 col-form-label">Message</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <p></p>
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