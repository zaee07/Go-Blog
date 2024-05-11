<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home', [
    'title' => 'Go-Blog',
    'subtitle' => 'Home Page',
    'name' => 'Muhammad Ihza Sofyansyah',
    'prodi' => 'sistem informasi'
])->name('home-page');

Route::view('/blog', 'blog', [
    'title' => 'Go-Blog',
    'subtitle' => 'Blog Page',
    'name' => 'Muhammad Ihza Sofyansyah',
    'prodi' => 'sistem informasi'
])->name('blog-page');

Route::view('/about', 'about', [
    'title' => 'Go-Blog',
    'subtitle' => 'About me',
    'name' => 'Muhammad Ihza Sofyansyah',
    'prodi' => 'sistem informasi'
])->name('about-page');

Route::view('/contact', 'contact', [
    'title' => 'Go-Blog',
    'subtitle' => 'Contact me',
    'name' => 'Muhammad Ihza Sofyansyah',
    'prodi' => 'sistem informasi'
])->name('contact-page');