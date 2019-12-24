<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>iYell HRMS</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300|Amatic+SC:700|Anton|Bangers|Caveat|Cherry+Swash:700|Corben:700|Creepster|Economica:700|Homemade+Apple|IM+Fell+DW+Pica+SC|Kaushan+Script|Londrina+Shadow|Montserrat+Subrayada|Oswald:700|Permanent+Marker|Quicksand|Roboto+Condensed:700|Teko|Vollkorn&display=swap" rel="stylesheet">
</head>

<body>
    <header class="navbar navbar-dark bg-dark">
        <div>
            <a class="navbar-brand iyell-logo" href="{{ url('') }}">
                iYell HMRS
            </a>
        </div>
        <div class="mb-4">
            <a href="{{ route('post.create') }}" class="btn btn-primary margine">
                Register employees
            </a>
        </div>
    </header>

    <div>
        @yield('content')
    </div>
</body>

</html>
