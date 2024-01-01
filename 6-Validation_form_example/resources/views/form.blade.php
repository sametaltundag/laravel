<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">

    <form action="{{ route('form-submit')}}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" required class="form-control">
    </div>

    <div class="mb-3">
        <label>Surname</label>
        <input type="text" name="surname" required class="form-control">
    </div>

    <div class="mb-3">
        <label>Age</label>
        <input type="number" name="age" required class="form-control">
    </div>

    <div class="mb-3">
        <label>Team</label>
        <input type="text" name="team" required class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>    

    </div>     
</body>
</html>