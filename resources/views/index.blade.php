@extends('layouts.header')

@section('content')
<div class="container">
    <div class="content_left">
        <div class="content_logo">
            <div class="logo" ></div>
            <div class="logo_text"><h1>APEX WORLD</h1></div>
            <div class="vertical-menu">
                <ul class = "nice-menu">
                    <li class = "orange"><a href = "/">HOME</a></li>
                    <li class = "red"><a href = "/video">VIDEO</a></li>
                    <li class = "green"><a href = "/legends">LEGENDS</a></li>
                    <li class = "blue"><a href = "/articles">ARTICLES</a></li>
                    <li class = "bright"><a href = "/setting">SETTING</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content_right">
        <form>
            <input type="text" placeholder="Искать здесь...">
            <button type="submit"><img src="image/svg/ionicons/search-circle.svg" width="40px"></button>
        </form>
    </div>
    <div class="word_trend"><img src="image/svg/ionicons/cafe-outline.svg" height="40" width="40"/>TREND VIDEOS</div>
    <div class="trendvideo">
        <a href="/proigrivatel">
            <img src="image/видео/ВИДЕОКАУСТИК.jpg" height="250" width="400" class="scale"/></a>
        <a href="/proigrivatel">
            <img src="image/видео/ВИДЕОМИРАЖ.jpg" height="250" width="400" class="scale"/></a>
        <a href="/proigrivatel">
            <img src="image/видео/ВИДЕООКТАИН.jpg" height="250" width="400" class="scale"/></a>
        <a href="/proigrivatel">
            <img src="image/видео/ВИДЕОРЕЙФ.jpg" height="250" width="400" class="scale"/></a>
        <a href="/proigrivatel">
            <img src="image/видео/ВИДЕОСВИЧ.jpg" height="250" width="400" class="scale"/></a>
        <a href="/proigrivatel">
            <img src="image/видео/ВИДЕОМЕМЕСМИРАЖ.jpg" height="250" width="400" class="scale"/></a>
    </div>
</div>
<br>
<div class="login-registration1">
    <a href="/register">REGISTRATION</a>
</div>
<br>
</div>
@endsection
