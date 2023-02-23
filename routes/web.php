<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $pages = ['Characters', 'Comics', 'Movie', 'TV', 'Games', 'Collectibles', 'Videos', 'Fans', 'News', 'Shop'];
    $comics = config('comics');
    $banners = [
        [
            'image' => 'buy-comics-digital-comics.png',
            'text' => 'Digital Comics',
        ],
        [
            'image' => 'buy-comics-merchandise.png',
            'text' => 'DC MERCHANDISE',
        ],
        [
            'image' => 'buy-comics-subscriptions.png',
            'text' => 'SUBSCRIPTION',
        ],
        [
            'image' => 'buy-comics-shop-locator.png',
            'text' => 'COMIC SHOP LOCATOR',
        ]
    ];
    return view('home', compact('pages', 'comics', 'banners'));
})->name('home');
