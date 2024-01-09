<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Module Managment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="container mt-4">
        @yield('content')
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                <div class="alert-alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
            </div>

            <div class="col-md-12">
                @if (session()->has('error'))
                <div class="alert-alert-danger">
                    {{ session()->get('error') }}
                </div>
                @endif
            </div>
        </div>
    </div>

</body>
</html>
