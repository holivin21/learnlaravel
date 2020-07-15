@extends('navigation/master')
@section('title','test')
@section('body')
<div class="container">
    <h1>test</h1>
    <p>
        <?= "name". htmlspecialchars($name)?>
        <br>
        {{"name".htmlspecialchars($name)}}
        <br>
        {{"name".$name}}
        <br>
        {!! "name".$name !!}
    </p>

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
