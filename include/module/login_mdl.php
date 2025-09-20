<form method="post" class="login__form">
    <input type="text" placeholder="User name" name="usr_name" required>
    <hr>
    <input type="password" placeholder="Password" name="usr_pass" maxlength="16" required>
    <hr>
    <div class="login__pin--container">
        <button class="log__pin--btn" name="pin_code" value="0">0</button>
        <button class="log__pin--btn" name="pin_code" value="1">1</button>
        <button class="log__pin--btn" name="pin_code" value="2">2</button>
        <button class="log__pin--btn" name="pin_code" value="3">3</button>
        <button class="log__pin--btn" name="pin_code" value="4">4</button>
        <button class="log__pin--btn" name="pin_code" value="5">5</button>
        <button class="log__pin--btn" name="pin_code" value="6">6</button>
        <button class="log__pin--btn" name="pin_code" value="7">7</button>
        <button class="log__pin--btn" name="pin_code" value="8">8</button>
        <button class="log__pin--btn" name="pin_code" value="9">9</button>
    </div>
    <hr>
    <input type="text" name="cd_pin" placeholder="code-pin" maxlength="6" required>
    <hr>
    <input type="submit" value="Login" name="usr_login">
</form>