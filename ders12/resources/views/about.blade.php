@extends('layouts.app')
@section('title') Hakkımızda @endsection

@section('content')
    
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Hakkımızda</h1>
          <span>Daha fazla bilgi almak için bize ulaşabilirsiniz.</span>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info about-info">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="more-info-content">
            <div class="row">
              <div class="col-md-6 align-self-center">
                <div class="right-content">
                  <h2>Get to know about</h2>
                  <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. 
                  <br><br>Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="left-image">
                  <img src="{{asset('front/assets/images/about-image.jpg')}}" alt="hakkımızdalogo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection