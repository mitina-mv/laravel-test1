<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class='container'>
        <nav class="nav">
            <a class="nav-link active" href="{{ route('form.index') }}">Index</a>
            <a class="nav-link" href="{{ route('form.create') }}">Create</a>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</body>
</html>