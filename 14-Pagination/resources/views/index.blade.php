@extends('layouts.app')
@section('title')
    Bootstrap Page
@endsection

@section('content')

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Adı Soyadı</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  <div class="row">
    {!!$users->links()!!}
  </div>
</div>

@endsection
