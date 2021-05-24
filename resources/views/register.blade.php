@extends('layouts.header2')
@section('content')
    <div class="main">

    <form method="get" action="/register">
        {{csrf_field()}}
        <div class="login">
            <input type="text" placeholder="Enter your Name..." name="login" required>
            <img class="loginimg" src="image/svg/ionicons/people-sharp.svg" height="30" width="30"/>
        </div>

        <div class="password">
            <input type="password" placeholder="Enter your Mail..." name="email" required>
            <img class="passwordimg" src="image/svg/ionicons/mail.svg" height="30" width="35"/>
        </div>
        <div class="repeatpassword">
            <input type="password" placeholder="Enter your Password..." name="psw" required>
            <img class="repeatpasswordimg" src="image/svg/ionicons/pencil.svg" height="30" width="35"/>
            <div class="registerbutton">
                <button type="submit">REGISTER</button>
            </div>
        </div>
        <div class="registrationmenu"></div>
        <div class="logoregister">
            <a href="/">
                <img src="image/logo.png" height="150" width="150" class="scale_logo"/></div>
        </a>
        <div class="logic">
            <a href="/login">У меня уже есть аккаунт...</a>
        </div>
    </form>
    </div>

    </div>
    </div>


    <div class="content-left"></div>
    <div class="content-right"></div>
    <div class="content-bottom"></div>



@endsection
