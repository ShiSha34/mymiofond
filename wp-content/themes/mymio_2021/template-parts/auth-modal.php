<div class="auth-modal" id="auth-modal" data-close="true">
    <div class="auth-modal__window">
        <span class="close" data-close="true">&times;</span>
        <div class="auth-modal__content auth-modal__content_enter active">
            <form action="<?= get_home_url() . '/custom_auth/auth.php'; ?>"
                  method="post"
                  class="auth-modal__content_form">
                <p class="auth-modal__content_caption">Вход</p>
                <div class="auth-modal__content_errors"></div>
                <div class="auth-modal__formgroup">
                    <label for="user_email" class="auth-modal__formgroup_label">
                        <span class="auth-modal__formgroup_note">E-mail</span>
                        <input type="text"
                               id="user_email"
                               placeholder="Введите ваш e-mail"
                               name="user_email"
                               class="auth-modal__input">
                    </label>
                </div>
                <div class="auth-modal__formgroup">
                    <label for="user_pass" class="auth-modal__formgroup_label">
                        <span class="auth-modal__formgroup_note">Пароль</span>
                        <input type="password"
                               id="user_pass"
                               placeholder="Введите ваш пароль"
                               name="user_pass"
                               class="auth-modal__input">
                    </label>
                </div>
                <div class="auth-modal__formgroup check">
                    <label for="user_remember">
                        <input type="checkbox"
                               checked="checked"
                               id="user_remember"
                               name="user_remember">
                        <span>Запомнить меня</span>
                    </label>
                </div>
                <button class="auth-modal__btn" type="submit">Войти</button>
                <div class="auth-modal__note">
                    <a href="/kontakty" class="auth-modal__link">Стать подопечным</a>
                    <a href="#" class="auth-modal__link switch">Забыли пароль?</a>
                </div>
            </form>
        </div>

        <div class="auth-modal__content auth-modal__content_forgot-pass">
            <form action="" class="auth-modal__content_form">
                <p class="auth-modal__content_caption">Забыли пароль?</p>
                <div class="auth-modal__content_errors"></div>
                <div class="auth-modal__formgroup">
                    <label for="forgot_email" class="auth-modal__formgroup_label">
                        <span class="auth-modal__formgroup_note">E-mail</span>
                        <input type="text"
                               id="forgot_email"
                               placeholder="Введите ваш e-mail"
                               name="forgot_email"
                               class="auth-modal__input">
                    </label>
                </div>
                <button class="auth-modal__btn" type="submit">Сбросить пароль</button>
                <div class="auth-modal__note">
                    <a href="#" class="auth-modal__link switch">Войти</a>
                </div>
            </form>
        </div>
    </div>
</div>
