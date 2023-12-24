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
                  <h2>{{$about->title}}</h2>
                  <p>{{$about->description}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="left-image">
                  <img src="{{asset('front/assets/images/'.$about->image)}}" alt="hakkımızdalogo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection