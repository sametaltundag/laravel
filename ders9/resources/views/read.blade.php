@foreach ($pages as $page)
    <h1>{{$page->title}}</h1>
    <br>
    <p>{{$page->content}}</p>
    <br>
    <hr>
@endforeach