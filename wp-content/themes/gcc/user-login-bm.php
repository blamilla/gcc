<form method="post" name="user-login-form" id="loginFormBM">
    <div class="login-form-container">
        <div class="step-heading">
            <span class="step-heading-text large-text">
                Welcome back!<br>
                Sign in.
            </span>
        </div>            
        <div class="user-sign-in-text">
            <span class="sign-in-text small-text">
                Not a member yet? <a class="no-paywall" id="signUpBMBtn">Join for Free!</a>
            </span>
        </div>
        <div class="field-container">
            <div class="form-label">
                <label for="username">
                    <?php _e( 'Username', 'debate' ); ?>
                </label>
            </div>
            <div class="field">
                <input type="email" placeholder="hint: it's your email!" autocomplete="off" name="username" id="usernameBM" />
            </div>
            <div id="usernameBMErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                <span id="usernameBMErrorMsg"></span>
            </div>
        </div>

        <div class="field-container">
            <div class="form-label">
                <label for="loginPassword">
                    <?php _e( 'Password', 'debate' ); ?>
                </label>
            </div>
            <div class="field">
                <input type="password" placeholder="password" autocomplete="off" name="loginPassword" id="loginPasswordBM" />
            </div>
            <div id="loginBMErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                <span id="loginBMErrorMsg"></span>
            </div>
        </div>

        <div class="forgot-password-container">
            <a class="lost no-paywall" id="forgotPasswordBMBtn" href="#">Forgot password?</a>
        </div>        

        <div id="loaderLoginBeMentor" class="loader"></div>
        
        <div class="field-container">
            <div class="action-button">
                <input class="submit_button" type="submit" id="signInSubmitBtn" value="Sign In" name="submit">
            </div>
        </div>

        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>

    </div>
        
</form>