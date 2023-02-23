<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    <!-- Header -->
    <header>
        <div class="info"></div>
        <div class="container navbar">
            <div class="nav-left">
                <figure>
                    <img src="{{ asset('images/dc-logo.png') }}" alt="Logo">
                </figure>
            </div>
            <div class="nav-center">
                <ul>
                    @foreach ($pages as $page)    
                        <li> <a href="#"> {{ $page }} </a> </li>
                    @endforeach
                </ul>
            </div>
            <div class="nav-right">
                <input type="search" placeholder="Search"> 
            </div>
        </div>
    </header>
</body>
</html>