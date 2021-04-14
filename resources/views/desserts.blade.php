@extends('layouts.mastermenu')

@section('content')
<div class="wrapper">
    <div class="title">
        <h4>our menu</h4>
    </div>
    <div class="menu">
        <div class="single-menu">
            <img src="{{url('/images_folder/bingsu1.png')}}" alt="">
            <div class="menu-content">
                <h4>MANGO BINGSOO <span> RM24</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/bingsu2.png')}}" alt="">
            <div class="menu-content">
                <h4>WATERMELON BINGSOO <span> RM24</span></h4>
            </div>
        </div>
        <div class="single-menu">
            <img src="{{url('/images_folder/bingsu3.png')}}" alt="">
            <div class="menu-content">
                <h4>HONEYDEW BINGSOO <span> RM25</span></h4>
            </div>
        </div>
    </div>
</div>
  
@endsection