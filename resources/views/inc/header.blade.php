@section('header')
    <header>

        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/"><img src="/img/logo.png" alt="" class="logotype"></a></h5>

            @if(Auth::check())
                @if(Auth::User()->status_id === '1')
                    <a class="p-2 text-white" href="/">Главная</a>
                    <a class="p-2 text-white" href="news">Новости</a>
                    <a class="p-2 text-white" href="services">Услуги</a>
                    <a class="p-2 text-white" href="admin">Админ панель</a>
                    <a class="p-2 text-white" href="review">Отзывы</a>
                    <a class="p-2 text-white" href="logout">Выйти</a>
                @endif
                @if(Auth::User()->status_id === '2')
					 <a class="p-2 text-white" href="/">Главная</a>
                    <a class="p-2 text-white" href="news">Новости</a>
                    <a class="p-2 text-white" href="services">Услуги</a>
                    <a class="p-2 text-white" href="kab">Личный кабинет</a>
                    <a class="p-2 text-white" href="/review">Отзывы</a>
                    <a class="p-2 text-white" href="logout">Выйти</a>

                @endif
            @else
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 text-white" href="/">Главная</a>
                    <a class="p-2 text-white" href="news">Новости</a>
                    <a class="p-2 text-white" href="services">Услуги</a>
                    <a class="p-2 text-white" href="about">О компании</a>
                    <a class="p-2 text-white" href="review">Отзывы</a>

                </nav>
                <a class="btn btn-warning" href="register">Регистрация</a>
                <a class="btn btn-warning" href="login">Авторизация</a>
        </div>
        @endif
    </header>
