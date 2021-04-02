@extends('layouts.master')

<div class="banner">

  <img src="{{url('/images_folder/3.jpg')}}" alt="Image"/>

</div>

<div class="booking-form">
  <div class="container">
    <br>
    <h1>Book A Table Page</h1>
    <h5>Please fill in the booking form!</h5>

  <br>
  <div class="form-group">
    <label for="example-date-input" class="col-sm-3 col-form-label">Location</label>
    <div class="col-sm-9">
      <select class="form-select" type="location" id="location">
        <option selected>Open this select menu</option>
        <option value="1">IOI City Mall, Putrajaya</option>
        <option value="2">IOI City Mall, Puchong</option>
        <option value="3">Suria KLCC, Kuala Lumpur</option>
        <option value="4">Wangsa Walk Mall, Wangsa Maju</option>
        <option value="5">KB Mall, Kota Bharu</option>
        <option value="6">Mesra Mall, Kemaman</option>
        <option value="7">Sunway Pyramid, Kuala Lumpur</option>
      </select>
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="example-date-input" class="col-sm-3 col-form-label">Date</label>
      <div class="col-sm-9">
        <input class="form-control" type="date" id="example-date-input">
      </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="example-time-input" class="col-sm-3 col-form-label">Time</label>
      <div class="col-sm-9">
        <input class="form-control" type="time" id="example-time-input">
      </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="example-number-input" class="col-sm-3 col-form-label">Number of Adult</label>
      <div class="col-sm-9">
        <input class="form-control" type="number" id="example-number-input">
      </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="example-number-input" class="col-sm-3 col-form-label">Number of Child</label>
      <div class="col-sm-9">
        <input class="form-control" type="number" id="example-number-input">
      </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="nameid" class="col-sm-3 col-form-label">Name</label>
    <div class="col-sm-9">
      <input name="name" type="text" class="form-control" id="nameid">
     </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="messageid" class="col-sm-3 col-form-label">Special Request</label>
    <div class="col-sm-9">
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </div>
  <br>
  <br>
  <div class="form-group row">
    <div class="offset-sm-3 col-sm-9">
      <button type="submit" class="btn btn-primary" href = "submitform">Submit</button>
    </div>
  </div>
  <br>
  <br>
</div>

<?php

?>
