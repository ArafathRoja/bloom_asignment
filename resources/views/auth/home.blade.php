@extends('layouts.app')

@section('content')
<div class="container p-3 bb">
    <div class="row">
        <p style="margin-left: 20px; color: #000000">We are the strategic and creative agency that makes
            <br> a difference for your brand, driven by design.</p>
    </div>
    <div class="row">
        <div class="col-md-4 port">
            <h1>Portfolio</h1>
            <p>We would like to put some of our projects in the spotlight</p>
        </div>
        <div class="col-md-8">
           <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{URL::asset('images/background.jpg')}}" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                  <img src="{{URL::asset('images/back2.jpeg')}}" alt="Chicago">
                </div>
                <div class="carousel-item">
                  <img src="{{URL::asset('images/back3.jpg')}}" alt="New York">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

            </div> 
        </div>
    </div>
</div>
<div class="container">
    <div class="row pt-5 justify-content-md-end">
        <div class="col-md-3">
            <img src="{{URL::asset('images/study.jpg')}}" height="200px" width="250px">
        </div>
        <div class="col-md-2">
            <h5 class="text-primary">Contact Us</h5>
            <p>3rd Floor</p>
            <p>Second Street</p>
            <p>Chennai-28</p>
            <p>xyz@chennai.com</p>
        </div>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="616" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=bloomingfeld%20impex%20pvt%20ltd%2C%20alarpet%2C%20chennai&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2torrentz.net">torrantz 2</a></div><style>.mapouter{position:relative;text-align:right;height:200px;width:616px;}.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:616px;}</style></div>

    </div>
</div>
@endsection