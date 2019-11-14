<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','TSP Portal')</title>
</head>
<body>
    <h1>Blade of TSP</h1>

    @yield('content')

    <ul>
        <li><a href = "/">Home</a></li>
        <li><a href = "/teacher">Teacher login</a></li>
        <li><a href = "/student">Student login</a></li>
        <li><a href = "/padao">Padao login</a></li>
    </ul>
    
    <i>&#9400 This site is protected by EU GDPR 2019</i>

</body>
</html>