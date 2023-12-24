@extends('layouts.app')
@section('title')
    Veri Ekle
@endsection
@section('content')
<form action="{{route('module.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Başlık</label>
      <input type="text" name="title" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Alt Başlık</label>
        <input type="text" name="subtitle" class="form-control">
      </div>

      <div class="mb-3">
        <label class="form-label">İçerik</label>
        <textarea type="text" name="content" class="form-control" cols="30" rows="3"></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Resim</label>
        <input type="file" name="image" class="form-control">
      </div>

    <button type="submit" class="btn btn-primary">Kaydet</button>
  </form>
@endsection