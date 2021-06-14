<form action="register" method="post" style="text-align: center; margin: auto;">
    @csrf
<h1>Регистрация</h1>
        <div class="form-group">
            <label for="login">Логин</label>
            <input style="margin: 10px;" name="login" placeholder="Введите логин" id="login" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input style="margin: 10px;" name="email" placeholder="Введите email" id="email" type="text" class="form-control">
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
        <button style="margin: 10px;" type="submit" value="Зарегистрироваться" class="btn btn-red btn-white-text full-width margin-top-10" name="apply">Зарегистрироваться</button>
    <br>
    <a href="login">Войти</a>
    <a href="/">На главную</a>
</form>
