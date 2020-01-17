<?php ?>
<div>
    <h1>Register</h1><br>
    <form action="" id="formulaireRegister" name="formRegister" onsubmit="confirme_password()"  method="post">
        <label>Username</label>
        <input type="text" id="" name="createUser"   placeholder="input your username" value="" minlength="4" required><br>
        <label>Email</label>
        <input type="email" id="" name="createEmail"   placeholder="input your email" value=""  required><br>
        <label>Password</label>
        <input type="password" id="createpwd" name="createpwds" placeholder="Enter new password" value="" minlength="8"   required>
        <label>Confirme password</label>
        <input type="password" id="confirmepwds" name="confirmepwd" placeholder="Enter password"  value="" minlength="8" required>

        <br>
        <input type="submit" id="registered" name="register" value="Register"><input type="reset" value="Reset"><br>
       Déjà membre?          <a href="index.php?action=login">Login </a>
    </form>
    <?php $error = confirme_password(); ?>
</div>

<script>

    function confirme_password() {
        var password = document.getElementById('createpwds');
        var confirme_pwd = document.getElementById('confirmwpwd').;

        if(password.value !== confirme_pwd.value ){
            document.getElementById('register').style.display ='none';
            alert('kaka');
        }else{

            document.getElementById('register').style.display='';
            alert('c ok');


        }



    }
</script>