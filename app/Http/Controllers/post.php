<?php

namespace App\Http\Controllers;
use App\PostModel;
use Illuminate\Http\Request;

class post extends Controller
{
    public function show(PostModel $post){
        //firstOrFail()--> jika $post adalah null maka akan masuk ke halam 404
        //$post = /DB::table('posts)->where('SLUG',$slug)->firstOrFail(); --> ini digunakan ketika tidak ada model
        // $post = PostModel::where('SLUG',$slug)->firstOrFail();
        return view('post/show',compact('post'));
    }
}
