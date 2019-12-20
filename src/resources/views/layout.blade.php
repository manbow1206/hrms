<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>iYell HRMS</title>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('') }}">
                HMRS
            </a>
        </div>
        <div class="mb-4">
        <a href="{{ route('post.create') }}" class="btn btn-primary">
        投稿を新規作成する
    </a>
</div>
    </header>

    <div>
        @yield('content')
    </div>
</body>
</html>
 