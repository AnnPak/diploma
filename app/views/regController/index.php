<? require_once DIR_PATH_APP.'/views/header.php'?>

<section class="main">
    <div class="row ">
        <div class="col-5 offset-5">

            <div class="main__choice">
                <div class="main__tab">
                    <div id="tab-reg" class="tab tab_active">Регистрация</div>
                    <div id="tab-auto" class="tab " onclick="login()">Авторизация</div>

                </div>

                <form id="reg_form" class="feed-form feed-form_active" action="" method="post">

                    <div class="wrapper-input">
                        <input class="textform" id="name" name="name" type="text" required="true">
                        <label for="name" class="main-label">Введите имя</label>
                    </div>

                    <div class="wrapper-input">
                        <input class="textform" id="login" name="login" type="text" required="true">
                        <label for="login" class="main-label">Введите логин</label>
                    </div>

                    <div class="wrapper-input">
                        <input type="email" class="textform" id="email" name="email" required="true">
                        <label for="email" class="main-label">Введите e-mail</label>
                    </div>

                    <div class="wrapper-input">
                        <input class="textform" id="password" name="password" type="password" required="true">
                        <label for="password" class="main-label">Введите пароль</label>
                    </div>

                    <div class="wrapper-input">
                        <input class="textform" id="password_confirm" name="password_confirm" type="password" required="true">
                        <label for="password_confirm" class="main-label">Введите пароль</label>
                    </div>

                    <div>
                        <div class="pass_erorr alert alert-danger d-none" role="alert">Пароли не совпадают!</div>
                        <div class="server_erorr alert alert-danger d-none" role="alert"></div>
                    </div>

                    <button type="submit" class="button button_login">Регистрация</button>

                </form>

                <form id="login_form" class="feed-form " action="" method="post">
                    <div class="wrapper-input">
                        <input class="textform" id="login" name="login" type="text" required>
                        <label for="login" class="main-label">Введите логин</label>
                    </div>

                    <div class="wrapper-input">
                        <input class="textform" id="password" name="password" type="password" required>
                        <label for="password" class="main-label">Введите пароль</label>
                    </div>


                    <button type="submit" class="button button_login">
                        <div class="loader-container clock d-none">
                            <div class="loader">
                                <div class="arc"></div>
                            </div>
                        </div>
                        <p class="button-title">Вход</p>

                    </button>

                </form>

            </div>



        </div>

    </div>
</section>

<? require_once DIR_PATH_APP.'/views/footer.php'?>