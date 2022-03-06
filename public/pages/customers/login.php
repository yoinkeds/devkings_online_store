<div id="user-login" class="section-content" >
    <div class="login_card">
        <div class="card-header">
            <div class="reg-reset">
                <button href="index.php?page=customer" link-to="#login-tab" class="reg">Login</button >
                <button href="index.php?page=customer&action=reg"   link-to="#reg-tab" class="reg">Register</button >
                <button href="index.php?page=customer&action=reset" link-to="#reset-tab" class="reg">PassWord</button >
            </div>
        </div>
        <div class="card-body">
            <div class="details_tabs show" id="login-tab">
                <h4 class="info-head">Login</h4>
                <form action="" method="" class="login-form">
                    <input type="text" name="logemail" id="logemail" placeholder="Your Username or E-mail">
                    <input type="password" name="logpassword" id="logpassword" placeholder="Your password">
                    <button class="form-btn" type="submit"> Login </button>
                </form>
            </div>
            <div class="details_tabs" id="reg-tab">
                <h4 class="info-head">Registration</h4>
                <form action="" method="" class="login-form">
                    <input type="text" name="regemail" id="regemail" placeholder="Your Username or E-mail">
                    <input type="password" name="regpassword" id="regpassword" placeholder="Your password">
                    <input type="text" name="address" id="address" placeholder="Your address">
                    <input type="text" name="pobox" id="pobox" placeholder="Your Postal code">
                    <input type="text" name="city" id="city" placeholder="Your City">
                    <input type="text" name="phone" id="phone" placeholder="Your Phone number">
                    <button class="form-btn" type="submit"> Register</button>
                </form>
            </div>
            <div class="details_tabs" id="reset-tab">
                <h4 class="info-head">Reset Password</h4>
                <form action="" method="" class="login-form">
                    <input type="text" name="resetemail" id="resetemail" placeholder="Your Username or E-mail">
                    <button class="form-btn" type="submit"> Send </button>
                </form>
            </div>
        </div>
    </div>
</div>
