@if ($students)
    @foreach ($students as $item)
        <li>{{ $item }}</li>
    @endforeach
@endif