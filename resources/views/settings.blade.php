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
    <div class="container-setting"><h1>SETTING</h1></div>
    <div class="container-setting-tumbler"><img src="image/svg/ionicons/arrow-down-circle.svg" width="40px"></div>
</div>
@endsection
