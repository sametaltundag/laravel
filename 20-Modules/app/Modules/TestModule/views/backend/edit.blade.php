@extends('TestModule::backend.app')

@section('content')
<div class="container mt-4">
    <a href="{{route('test.index')}}" class="btn btn-sm btn-primary">Kayıt Listesi</a>

    <form action="{{route('test.update', $test->id)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Başlık</label>
            <input type="text" value="{{$test->name}}" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Başlık</label>
            <input type="text" value="{{$test->description}}" name="description" id="description" class="form-control">
        </div>

        <div class="form-group mt-2">
            <button type="submit" class="btn btn-sm btn-success">Güncelle</button>
        </div>

    </form>
</div>
@endsection
