@extends('layouts.app')
@section('title') Hizmetlerimiz @endsection

@section('content')
    
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Hizmetlerimiz</h1>
        <span>Detaylı bilgi için bize ulaşabilirsiniz</span>
      </div>
    </div>
  </div>
</div>

<div class="single-services">
  <div class="container">
    <div class="row" id="tabs">
      <div class="col-md-4">
        <ul>
          @foreach ($services as $service)
            <li><a href='#tabs-{{$service->id}}'>{{$service->title}}<i class="fa fa-angle-right"></i></a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-md-8">
        <section class='tabs-content'>
          @foreach ($services as $service)
          <article id='tabs-{{$service->id}}'>
            <img src="assets/images/single_service_01.jpg" alt="">
            <h4>{{$service->title}}</h4>
            <p>{{$service->description}}</p>
          </article>
          @endforeach
          
        </section>
      </div>
    </div>
  </div>
</div>


  
  @endsection