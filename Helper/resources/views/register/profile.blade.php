
@extends('layout.master')
@section('content')
<style>
body{
  background-color:#c3e4a833;
}

</style>
{{-- <!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>



<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">


  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> --}}
  <div class="container" style="margin-top: 120px">
  <div class="row flex-lg-nowrap">
    <div class="col-12 col-lg-auto mb-3" style="width: 200px;">

    </div>

    <div class="col">
      <div class="row">
        <div class="col mb-3">
          <div class="card">
            <div class="card-body">
              <div class="e-profile">
                <div class="row">
                  <div class="col-12 col-sm-auto mb-3">
                    <div class="mx-auto" style="width: 140px;">
                      <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; ">
                       <img src="/register/images/OIP.jfif" style="width:140px;height:130px" >
                      </div>
                    </div>
                  </div>
                  <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                    <div class="text-center text-sm-left mb-2 mb-sm-0">



                      <div class="mt-2">

                      </div>
                    </div>
                    <div class="text-center text-sm-right">

                    </div>
                  </div>
                </div>
                <ul class="nav nav-tabs">
                  <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                </ul>
                <div class="tab-content pt-3">
                  <div class="tab-pane active">
                    <form class="form" method="post" action="{{route('users.update',$users->id)}}">
                      @csrf
                      @method('PUT')
                      <div class="row">
                        <div class="col">
                          <div class="row">
                            <div class="col">
                              <div class="form-group">


                                <label>User Name</label>
                                <input class="form-control" type="text" name="name" placeholder="John Smith" value="{{ $users->name}}">

                              </div>
                            </div>

                          </div>
                          <div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" placeholder="user@example.com" name="email" value="{{$users->email}}">
                             
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                     
                      <div class="row">
                        <div class="col d-flex justify-content-end">
                          <button class="btn btn-primary" type="submit">Save Changes</button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-3 mb-3">
          <div class="card mb-3">
            {{-- <div class="card-body">
              <div class="px-xl-3">
                <button class="btn btn-block btn-secondary">
                  <i class="fa fa-sign-out"></i>
                  <span>Logout</span>
                </button>
              </div>
            </div> --}}
          </div>
          <div class="card">
            <div class="card-body">
              <h6 class="card-title font-weight-bold">Support</h6>
              <p class="card-text">Get fast, free help from our friendly assistants.</p>
              <a href="/contact"><button type="button" class="btn btn-primary">Contact Us</button></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    @endsection

