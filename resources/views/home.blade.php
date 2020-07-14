@extends('navigation/master')
@section('title','home')
@section('body')
    <div class="container">
        <h1>home</h1>

        <p>
            test {{$name}}
        </p>
        <p>
            test {!!$name!!} {{-- ->pasing html tag from web php --}}

        </p>
        <p>
            {!! nl2br($tulisan) !!} {{-- yang di pasing dari web php adalah $tulisan bukan lable--}}
        </p>
        <p>
            {{ nl2br($tulisan) }} {{--nl2br(funtion php) untuk membaca bentuk tag yang ada di web.php--}}
        </p>

    </div>
@endsection
