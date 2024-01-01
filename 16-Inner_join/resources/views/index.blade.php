<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    

    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item active">Kullanıcı ve Profil Bilgisi</li>
                    @foreach ($userWithProfile as $user)
                        <li class="list-group-item">
                            <b>{{ $user->name }}</b>
                            <p>Email: {{ $user->email }}</p>
                            @if ($user->profile)
                                <p>Bio: {{ $user->profile->bio }}</p>
                            @else
                                <p>No bio available</p>
                            @endif
                        </li>
                    @endforeach

                </ul>
            </div>

            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item active">Makaleler ve Yorumlar</li>
                    @foreach ($articleWithComment as $comment)
                        <li class="list-group-item">
                            <b>{{ $comment->title }}</b>
                            <p>Yorum: {{ $comment->comment_text }}</p>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
