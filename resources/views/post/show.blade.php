@extends('navigation/master')

@section('title',$post->SLUG)

@section('body')
<div class="container">
    <h1>{{$post->TITLE}}</h1>
    <h1>{{$post->BODY}}</h1>
</div>
@endsection
