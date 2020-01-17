<?php
echo 'reussi';?>
<form action="test.php" class="pure-form">
    <fieldset>
        <legend>Confirm password with HTML5</legend>4

        <input type="password" placeholder="Password" id="password" onchange="teste1()" required>
        <input type="password" placeholder="Confirm Password" id="confirm_password" oninput="teste1()" required>

        <button type="submit" class="pure-button pure-button-primary">Confirm</button>
    </fieldset>
</form>
<script>
    function teste1() {


        var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value !== confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    }
</script>