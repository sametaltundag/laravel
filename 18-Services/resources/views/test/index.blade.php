@extends('test.app')

@section('content')
    <div class="mb-3">
        <a href="{{route('create')}}" class="btn btn-primary btn-sm">Yeni Kayıt</a>
    </div>

    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Başlık</th>
                <th>Açıklama</th>
                <th>İşlemler</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tests as $test)
            <tr>
                <td>{{ $test->id }}</td>
                <td>{{ $test->title }}</td>
                <td>{{ $test->description }}</td>
                <td class="d-flex gap-2">
                    <a class="btn btn-sm btn-outline-success" href="{{route('edit', $test->id)}}">Düzenle</a>
                    <form action="{{route('delete', $test->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger" type="submit">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
