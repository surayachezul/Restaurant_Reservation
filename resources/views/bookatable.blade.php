@extends('layouts.master')

@section('content')

<div class="booking-form">
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
    
    <section class = "row col p-2">
      <br>
      <h1>Book A Table</h1>
      <h5>Please fill in the booking form!</h5>
      <br>

      <form action="/bookatable" method="post">
      @csrf
        <div class="form-group">
          <label for="location" class="col-sm-3 col-form-label">Location</label>
          <div class="col-sm-9">
            <select name="location" class="form-select" type="location" id="location">
              <option selected>Select location</option>
              @foreach ($locations as $location)
              <option value="{{ $location->code_id }}">{{ $location->restaurant_name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <br>
        <div class="form-group row">
          <label for="example-date-input" class="col-sm-3 col-form-label">Date</label>
            <div class="col-sm-9">
              <input name="date" class="form-control" type="date" id="example-date-input">
            </div>
        </div>
        <br>
        <div class="form-group row">
          <label for="time" class="col-sm-3 col-form-label">Time</label>
          <div class="col-sm-9">
            <select name="time" class="form-select" type="time" id="time">
              <option selected>Select time</option>
              <option value="10:00">10:00</option>
              <option value="10:30">10:30</option>
              <option value="11:00">11:00</option>
              <option value="11:30">11:30</option>
              <option value="12:00">12:00</option>
              <option value="12:30">12:30</option>
              <option value="13:00">13:00</option>
              <option value="13:30">13:30</option>
              <option value="14:00">14:00</option>
              <option value="14:30">14:30</option>
              <option value="15:00">15:00</option>
              <option value="15:30">15:30</option>
              <option value="16:00">16:00</option>
              <option value="16:30">16:30</option>
              <option value="17:00">17:00</option>
              <option value="17:30">17:30</option>
              <option value="18:00">18:00</option>
              <option value="18:30">18:30</option>
              <option value="19:00">19:00</option>
              <option value="19:30">19:30</option>
              <option value="20:00">20:00</option>
              <option value="20:30">20:30</option>
              <option value="21:00">21:00</option>
            </select>
          </div>
        </div>
        <br>
        <div class="form-group row">
          <label for="adult_no" class="col-sm-3 col-form-label">Number of Adult</label>
          <div class="col-sm-9">
            <select name="adult_no" class="form-select" type="adult_no" id="adult_no">
              <option selected>Number of adult</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
        </div>
        <br>
        <div class="form-group row">
          <label for="child_no" class="col-sm-3 col-form-label">Number of Child</label>
          <div class="col-sm-9">
            <select name="child_no" class="form-select" type="child_no" id="child_no">
              <option selected>Number of child</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
        <br>
        <div class="form-group row">
          <label for="nameid" class="col-sm-3 col-form-label">Name</label>
          <div class="col-sm-9">
            <input name="name" value="{{old('name')}}" type="text" class="form-control">
          </div>
        </div>
        <br>
        <div class="form-group row">
          <label for="phoneno" class="col-sm-3 col-form-label">Phone Number</label>
          <div class="col-sm-9">
            <input name="phone_no" value="{{old('phone_no')}}" type="int" class="form-control">
          </div>
        </div>
        <br>
        <div class="form-group row">
          <label for="messageid" class="col-sm-3 col-form-label">Special Request</label>
          <div class="col-sm-9">
            <textarea name = "special_request" value="{{old('special_request')}}" class="form-control" id="messageid" rows="3"></textarea>
          </div>
        </div>
        <br>
        <br>
        <div class="form-group row">
          <div class="offset-sm-3 col-sm-9">
            <button type="submit" class="btn btn-primary" href="/bookingconfirm">Submit</button>
          </div>
        </div>
        <br>
        <br>
      </div>
    </form>
  </section>
    
@endsection
