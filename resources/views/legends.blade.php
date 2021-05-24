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
        <div class="container_legends"><h1>LEGENDS</h1></div>
        <div class="center-legends"><a href="https://geekprank.com/fbi-warning/"><img class="icon-legends" src="image/kaustik.jpg" width="150" height="150"></a>
            <a href="https://geekprank.com/fbi-warning/"><img class="icon-legends" src="image/pathfinder.jpg" width="150" height="150"></a>
            <a href="https://geekprank.com/fbi-warning/"><img class="icon-legends" src="image/revenant.jpg" width="150" height="150"></a>
            <a href="https://geekprank.com/fbi-warning/"><img class="icon-legends" src="image/rampart.jpg" width="150" height="150"></a><br><br><br>
            <a href="https://geekprank.com/fbi-warning/"><img class="icon-legends" src="image/crypto.jpg" width="150" height="150"></a>
            <a href="https://geekprank.com/fbi-warning/"><img class="icon-legends" src="image/octain.jpg" width="150" height="150"></a>
            <a href="https://geekprank.com/fbi-warning/"><img class="icon-legends" src="image/bloodhound.jpg" width="150" height="150"></a>
            <a href="https://geekprank.com/fbi-warning/"><img class="icon-legends" src="image/lifeline.jpg" width="150" height="150"></a><br><br><br>
            <a href="https://geekprank.com/fbi-warning/"><img class="icon-legends" src="image/wattson.jpg" width="150" height="150"></a>
            <a href="https://geekprank.com/fbi-warning/"><img class="icon-legends" src="image/wraith.jpg" width="150" height="150"></a>
            <a href="https://geekprank.com/fbi-warning/"><img class="icon-legends" src="image/fuse.jpg" width="150" height="150"></a>
            <a href="https://geekprank.com/fbi-warning/"><img class="icon-legends" src="image/mirage.jpg" width="150" height="150"></a>
        </div>
    </div>
@endsection
