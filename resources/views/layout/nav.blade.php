<div class="header-nav">
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__contacts">
                    <div class="header__adress">г. Нижний-Новгород</div>
                    <div class="header__number">
                        <a class="header__number-link" href="tel:79028684084">8(902)686-40-84</a>
                    </div>
                </div>
                <div class="header__social">
                    <ul class="social__inner">
                        <li class="social__item"><a href="#"><i class="bi bi-whatsapp" style="font-size: 22px; color: #d24d57;"></i></a></li>
                        <li class="social__item"><a href="#"><i class="bi bi-messenger" style="font-size: 22px; color: #d24d57;"></i></a></li>
                        <li class="social__item"><a href="#"><i class="bi bi-telegram" style="font-size: 22px; color: #d24d57;"></i></a></li>
                        <li class="social__item"><a href="#"><i class="bi bi-twitter" style="font-size: 22px; color: #d24d57;"></i></a></li>
                        <li class="social__item"><a href="#"><i class="bi bi-facebook" style="font-size: 22px; color: #d24d57;"></i></a></li>
                        <li class="social__item"><a href="#"><i class="bi bi-instagram" style="font-size: 22px; color: #d24d57;"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-dark" style="background-color: #a83f47;">
        <div class="container">
            <a class="navbar-brand logo" href="{{ route('home') }}"><img src="public/img/logo.png" alt=""><span>SPECIAL equ</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav__list" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('home')) active @endif" aria-current="page" href="{{ route('home') }}">Главная</a>
                    </li>
                </ul>
                @auth()
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::is('user.profile')) active @endif" href="{{ route('user.profile') }}">Профиль</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light" href="{{ route('logout') }}">Выход</a>
                        </li>
                    </ul>
                @endauth
                @guest()
                    <a href="{{  route('login')}}" class="btn btn-outline-light">Войти</a>
                    <a href="{{  route('registration')}}" class="btn btn-outline-light ms-2">Зарегистрироваться</a>
                @endguest
            </div>
        </div>
    </nav>
</div>


