@extends('navigation/master')
@section('title','Login')
@section('style')
    <style>
        #username{
            text-align: left;
        }
    </style>
@endsection
@section('body')
    <div class="container" >
        <div class="form-body">
            <form action="">
                <div id="Username" class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" id="txtUsername" placeholder="Username">
                </div>
                <div id="Password" class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="txtPassword" placeholder="Password">
                </div>
                <input type="checkbox" id="remember">Remember me
                <div id="btn">
                    <input type="submit" value="Login" class="btn btn-success">
                    <input type="submit" value="Sign up" class="btn btn-info">
                </div>
                <span>Forget <a href="">Password?</a></span>

            </form>
        </div>

    </div>
@endsection
