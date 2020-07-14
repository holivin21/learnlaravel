<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name="<h1>hello<h1>";
    $label="Lorem ipsum dolor
    sit amet consectetur adipisicing elit.
    Explicabo inventore incidunt at odit mollitia.
    Culpa autem error odio at placeat,
    provident, nobis quo magni consequatur
    veritatis obcaecati ad quas dignissimos?";
    return view('home',['name'=>$name,'tulisan'=>$label]);
    //    return 'homepage';
});

Route::view('about','about');
Route::view('contact', 'contact');
Route::view('login', 'login');
