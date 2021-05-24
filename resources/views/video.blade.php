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
    <div class="container-video"><h1>VIDEO</h1></div>
    <a href="https://www.youtube.com/watch?v=hlPNzHNhrGU&t=1s">
        <div class="container-video-box1"><img class="container-video-box-image" src="image/видео/maxresdefault.jpg" height="200" width="400"/></div></a>
    <a href="https://www.youtube.com/watch?v=HqlVX-P_6mc&t=3s">
        <div class="container-video-box2"><img class="container-video-box-image" src="image/видео/what%20new%20season.jpg" height="200" width="400"/></div></a>
    <a href="https://youtu.be/mxv-4sD8eXU">
        <div class="container-video-box3"><img class="container-video-box-image" src="image/видео/season-9-of-apex-legends-kicks-off-in-may.jpg" height="200" width="400"/></div></a>
    <a href="https://www.youtube.com/watch?v=P4dBi7N7KNI&t=1s">
        <div class="container-video-box4"><img class="container-video-box-image" src="image/видео/newseas.jpg" height="200" width="400"/></div></a>
    <div class="container-video-filter">FILTERS</div>
    <div class="container-video-box1-info">СЕЗОН "Наследие" В Apex Legends - ЧТО ДОБАВЯТ?</div>
    <div class="container-video-box2-info">ЧТО ТЫ УПУСТИЛ в Трейлере 9 Сезона Апекс: Все Сливы и Новости Apex Legends Наследие</div>
    <div class="container-video-box3-info">Сегодня Respawn Entertainment проведёт прямую трансляцию, демонстрируя основные наработки будущего 9 сезона Apex Legends, называемого «Наследие»</div>
    <div class="container-video-box4-info">УСПЕЙ ЭТО СДЕЛАТЬ до СТАРТА СЕЗОНА: Заражение Олимпа, Урон Нового Оружия - Apex Legends Новости</div>
</div>
</div>
@endsection
