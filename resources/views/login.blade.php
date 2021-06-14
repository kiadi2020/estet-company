<form action="login" method="post" style="text-align: center; margin: auto;">
    @csrf
    <h1>Авторизация</h1>
    <div class="form-group">
        <label for="login">Логин</label>
        <input style="margin: 10px;" name="login" placeholder="Введите логин" id="login" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Пароль</label>
        <input style="margin: 10px;" name="password" placeholder="Введите пароль" id="password" type="text" class="form-control">
    </div>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <div class="checkbox">
                <label><input style="margin: 10px;" name="remember" type="checkbox"> Запомнить меня на сайте
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <button style="margin: 10px;" class="btn btn-default" type="submit">
                Войти
            </button>
        </div>
    </div>
    <a href="register">Уже зарегистрированы?</a>
    <a href="/">На главную</a>
</form>
