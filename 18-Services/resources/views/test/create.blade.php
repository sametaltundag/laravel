@extends('test.app')

@section('content')
<div class="mb-3">
    <a href="{{route('test')}}" class="btn btn-primary btn-sm">Listele</a>
</div>

<form action="{{route('store')}}" method="POST">
@csrf
<div class="form-group">
    <label for="title">Başlık</label>
    <input type="text" name="title" id="title" class="form-control" required>
</div>

<div class="form-group">
    <label for="description">Açıklama</label>
    <input type="text" name="description" id="description" class="form-control">
</div>

<div class="form-group text-end">
    <button type="submit" class="btn btn-success btn-sm mt-2">Kaydet</button>
</div>
</form>
@endsection
