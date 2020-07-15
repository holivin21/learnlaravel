<?php

use Illuminate\Support\Facades\Route;

Route::get('/','home');

Route::get('posts/{slug}','post@show');

Route::view('about','about');

Route::get('contact', function(){

    // request()->fullUrl(); --> untuk mengambil url dari halaman (http://127.0.0.1:8000/contact)
    // request()->path(); --> untuk mengambil url dari halaman (contact)
    // request()->path() =='contact'?true:false; --> untuk kondisi if di path
    // request()->is('contact') ?true:false --> return boolean, untuk mengecek current path

    return view('contact');
});

Route::view('login', 'login');

Route::get('test', function () {
    // htmlspecialchars() --> untuk mengambil tag html tanpa merubahnya (<h1>hello</h1>)

    $name="<h1>hello<h1>";
    $label="Lorem ipsum dolor
    sit amet consectetur adipisicing elit.
    Explicabo inventore incidunt at odit mollitia.
    Culpa autem error odio at placeat,
    provident, nobis quo magni consequatur
    veritatis obcaecati ad quas dignissimos?";
    return view('test',['name'=>$name,'tulisan'=>$label]);
});
