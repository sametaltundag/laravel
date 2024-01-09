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
                <td>
                    <a href="" class="btn btn-sm btn-primary">Düzenle</a>
                    <a href="" class="btn btn-sm btn-danger">Sil</a>
                </td>
                <td></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
