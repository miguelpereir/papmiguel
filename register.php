<?php
include_once("includes/body.inc.php");
top_login();
?>
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/222.jpg');">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title ">
						Registar
					</span>
                <div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <input class="input100" type="text" name="username">
                    <span class="focus-input100"></span>
                </div>

                <div class="p-t-31 p-b-9">
						<span class="txt1">
							E-mail
						</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <input class="input100" type="text" name="e-mail">
                    <span class="focus-input100"></span>
                </div>

                <div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass">
                    <span class="focus-input100"></span>
                </div>
                <div class="p-t-31 p-b-9">
						<span class="txt1">
							Confirm Password
						</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <input class="input100" type="text" name="confirm pass">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <button class="login100-form-btn">
                        Registar
                    </button>
                </div>

                <div class="w-full text-center p-t-55">
						<span class="txt2">
							Já tem conta?
						</span>

                    <a href="login.php" class="txt2 bo1">
                        Entra já!
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php

bot_login();
?>