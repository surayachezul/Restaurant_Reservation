@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Dashboard")
@endcomponent

<body>

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

<div class = "container" >
    <div class = "col-md-12">
        <br>
        <br>
        <br>
        <h2>Restaurant Reservation Admin System</h2>
        <a href="{{ url('/admin/menus/adminAddMenu') }}" class="btn btn-primary">Add Menu</a>
        <a href="{{ url('/admin/menus/adminEditMenu') }}" class="btn btn-primary">Update Menu</a>
        <a href="{{ url('/admin/menus/adminDeleteMenu') }}" class="btn btn-danger">Delete Menu</a>
        <hr>
        <h4>Restaurant Menu List</h4>
    </div>

    {{-- <div class= "menu-content">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Menu Code</th>
                <th scope="col">Menu Image</th>
                <th scope="col">Menu Name</th>
                <th scope="col">Menu Price</th>
              </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                <tr>
                    <th scope="row">{{ $menu->category_code }}</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div> --}}
</div>

</body>

@endsection
