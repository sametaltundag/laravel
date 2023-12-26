<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uploads Module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>



    <div class="container">
        <h3>Form Upload</h3>
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item" aria-current="true">Single Upload</li>
                    <form method="POST" action="{{ route('single-upload') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" class="form-control">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </ul>
            </div>

            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item" aria-current="true">Multi Upload</li>
                    <form method="POST" action="{{ route('multi-upload') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="images[]" class="form-control" multiple>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </ul>
            </div>

            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item" aria-current="true">Crop Upload</li>
                    <form method="POST" action="{{ route('crop-upload') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" class="form-control">
                        <input type="text" name="width" placeholder="width" class="form-control">
                        <input type="text" name="height" placeholder="height" class="form-control">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </ul>
            </div>


            {{-- 
                <div class="col-md-2">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">An active item</li>
                  </ul>
            </div>
             --}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>