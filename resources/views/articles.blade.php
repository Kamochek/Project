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
        <div class="container-articles"><h1>ARTICLES</h1></div>
        <div class="container-mini-articles">TOP</div>
        <div CLASS="container-articles-box-1"><img class="container-articles-box-image" src="image/articles/legacy.jpg" height="200" width="400"/></div><div CLASS="container-articles-box-1-more">
            В кинематографическом трейлере герои Apex Legends в отрядах сражаются друг с другом в различных локациях на картах
            «Олимп», «Край света» и «Каньон Кингс». В конце видео появляется Эш — главный антагонист Titanfall 2.
            Она приглашает участников отрядов на «Арены» — так будет называться новый режим в Apex Legends,
            геймплей которого Respawn покажет 26 апреля. Сами разработчики пока никаких деталей о нём не рассказывали.</div>
        <div CLASS="container-articles-box-2"><img class="container-articles-box-image" src="image/articles/legacy2.jpg" height="200" width="400"/></div><div CLASS="container-articles-box-2-more">
            Новый сезон начнется 4 мая, но уже сейчас известно,
            какие легенды получат бафы и нерфы. Об этом периодически рассказывают сами разработчики, отвечая на вопросы
            игроков в Твиттере и Реддите. Естественно, список может быть изменен.</div>
        <div CLASS="container-articles-box-3"><img class="container-articles-box-image" src="image/articles/legacy3.jpg" height="200" width="400"/></div><div CLASS="container-articles-box-3-more">
            9 сезон Apex Legends «Наследие»<br>
            9 сезон Apex Legends «Наследие»
            Старт 9-го сезона состоится 4 мая 2021. В игру появится новая легенда Валькирия и новое оружие: лук Бочека.
            Карта Олимп преобразится из-за разразившейся на ней эпидемии.</div>
    </div>
</div>
@endsection
