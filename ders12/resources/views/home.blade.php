@extends('layouts.app')
@section('title')
    Anasayfa
@endsection

@section('content')
    

<!-- Page Content -->
@include('components.banner')
@include('components.request-form')
@include('components.services')
@include('components.more-info')
@include('components.testimonials')
@include('components.contact-form')



  
  @endsection