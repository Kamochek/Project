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
            <button class="search" type="submit"><img src="image/svg/ionicons/search-circle.svg" width="40px"></button>
        </form>
        <div class="container_proigrivatel">
            <h1>PROIGRIVATEL </h1>
            <div class="center-proigrivatel"><img src="image/видео/видеонасайте.jpg" height="400" width="650"></div>
            <div class="right-proigrivatel">Recommended Videos <br><img src="image/видео/ВИДЕОСОВЕТЫ.jpg" width="150" height="70"><br><br><br>
                <img src="image/видео/ВИДЕОКАУСТИК.jpg" width="150" height="70"><br><br><br>
                <img src="image/видео/ВИДЕОРЕЙФ.jpg" width="150" height="70"><br><br><br>
                <img src="image/видео/ВИДЕООКТАИН.jpg" width="150" height="70"><br><br><br>
                <img src="image/видео/ВИДЕОМЕМЕСМИРАЖ.jpg" width="150" height="70"><br><br><br></div>
            <div class="left-proigrivatel">About The Video<br><br><br>The FYZU<br><br><br>Взяли топ 1 с Recrento-ом</div>
            <div class="down-proigrivatel">Сomments<br><br><br> БУХАРИК - А рекрент не так уж и плох в арехе <br><br><br> BARRET- Думал FUZY будет бомбить
                <br><br><br> Recrent - "БУХАРИК", а ты думал я только в колде всех выношу <br><br><br> Faide - NICE)NICE)NICE)</div>
        </div>
    </div>
</div>
</div>
@endsection
