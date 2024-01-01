@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Başlık</th>
                <th scope="col">Alt Başlık</th>
                <th scope="col">İçerik</th>
                <th scope="col">Görsel</th>
                <th scope="col" style="max-width: 100px">İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->subtitle }}</td>
                    <td>{{ $data->content }}</td>
                    <td><img src="/image/{{ $data->image }}" alt="image" height="100"></td>
                    <td>
                        <button class="btn btn-primary btn-sm">Göster</button>
                        <button class="btn btn-success btn-sm">Düzenle</button>
                        <button class="btn btn-danger btn-sm">Sil</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
