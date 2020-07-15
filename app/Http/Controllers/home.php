<?php

namespace App\Http\Controllers;

class home extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $name=' andres';
        return view('home',compact('name'));
    }
}
