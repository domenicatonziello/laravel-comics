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
    <!-- Main -->
    <main>
        <!-- Jumbotron -->
        <div class="jumbo"></div>
        <!-- main-top -->
        <section class="main-top">
            <div class="title"> Current Series </div>
            <div class="container">
                @foreach($comics as $comic)
                    <figure>
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['type'] }}">
                        <figcaption> {{ $comic['series'] }} </figcaption>
                    </figure>
                @endforeach
            </div>
        </section>
        <!-- main bottom -->
        <section id="banner">
            <ul class="container">
                @foreach($banners as $banner)
                    <li>
                        <img src="{{Vite:: asset('resources/images/'.$banner['image'])}}" alt="buy-comics-digital">
                        <p>{{$banner['text']}}</p>
                    </li>
                @endforeach
            </ul>
        </section>
    </main>
    <!--Footer -->
    
</body>
</html>