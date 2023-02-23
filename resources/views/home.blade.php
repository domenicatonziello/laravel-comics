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
    <footer>
        <!-- footer top -->
        <section class="footer-top">
            <div class="container">
                <div class="col-left">
                    <!-- lista 1-->
                    <div>
                        <div>
                            <h3>DC COMICS </h3>
                            <ul>
                                <li>Charactes</li>
                                <li>Comics </li>
                                <li>Movies</li>
                                <li>Tv</li>
                                <li>Games</li>
                                <li>Video</li>
                                <li>News</li>
                            </ul>
                        </div>
                        <div>
                            <h3>SHOP</h3>
                            <ul>
                                <li>Shop DC </li>
                                <li>Shop DC Collectibles</li>
                            </ul>
                        </div>
                    </div>
                    <!-- lista 2 -->
                    <div>
                        <div>
                            <h3> DC</h3>
                            <ul>
                                <li>Terms Of Use </li>
                                <li>Privacy policy (New)</li>
                                <li>Ad Choise </li>
                                <li>Advertising</li>
                                <li>Jobs</li>
                                <li>Subscriptions</li>
                                <li>Talent Workshops</li>
                                <li>CPSC Certificates</li>
                                <li>Resings</li>
                                <li>Shop Help</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                    <!-- lista 3 -->
                    <div>
                        <div>
                            <h3>SITES</h3>
                            <ul>
                                <li>DC</li>
                                <li>MAD Magazine</li>
                                <li>DC Kids</li>
                                <li>DC Universe</li>
                                <li>DC Power Visa</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-right">
                    <img src="{{Vite:: asset('resources/images/dc-logo-bg.png')}}" alt="dc-logo">
                </div>
            </div>
        </section>
        <!-- footer bottom -->
        <section class="footer-bottom">
            <div class="container">
                <div class="nav-left">
                    <button type="button"> SIGN-UP NOW!</button>
                </div>
                <div class="nav-right">
                    <h5> FOLLOW US </h5>
                    <ul>
                        <li>
                            <a href="#"> <img src="{{Vite:: asset('resources/images/footer-facebook.png')}}" alt="Facebook"> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="{{Vite:: asset('resources/images/footer-twitter.png')}}" alt="twitter"> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="{{Vite:: asset('resources/images/footer-youtube.png')}}" alt="youtube"> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="{{Vite:: asset('resources/images/footer-pinterest.png')}}" alt="pinterest"> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="{{Vite:: asset('resources/images/footer-periscope.png')}}" alt="periscope"> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>