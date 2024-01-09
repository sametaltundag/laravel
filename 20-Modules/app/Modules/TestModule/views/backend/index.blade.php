@extends('TestModule::backend.app')

@section('content')
<div class="container mt-4">
    <a href="{{route('test.create')}}" class="btn btn-sm btn-primary">Yeni Kayıt Oluştur</a>

    <table class="table">
        <thead>
            <tr>
                <th>Başlık</th>
                <th>Açıklama</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tests as $test)
            <tr>
                <td>{{$test->name }}</td></td>
                <td>{{$test->description }}</td>
                <td class="d-flex">
                    <a href="{{route('test.edit', $test->id)}}" class="btn btn-sm btn-primary mx-2">Düzenle</a>
                    <form action="{{route('test.destroy', $test->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
