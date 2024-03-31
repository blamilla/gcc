<form method="post" name="user-login-form" id="loginFormFM">
    <div class="login-form-container">
        <div class="step-heading">
            <span class="step-heading-text large-text">
                Welcome back!<br>
                Sign in.
            </span>
        </div>            
        <div class="user-sign-in-text">
            <span class="sign-in-text small-text">
                Not a member yet? <a class="no-paywall" id="signUpFMBtn">Join for Free!</a>
            </span>
        </div>
        <div class="field-container">
            <div class="form-label">
                <label for="username">
                    <?php _e( 'Username', 'debate' ); ?>
                </label>
            </div>
            <div class="field">
                <input type="email" placeholder="hint: it's your email!" autocomplete="off" name="username" id="usernameFM" />
            </div>
            <div id="usernameFMErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                <span id="usernameFMErrorMsg"></span>
            </div>
        </div>

        <div class="field-container">
            <div class="form-label">
                <label for="loginPassword">
                    <?php _e( 'Password', 'debate' ); ?>
                </label>
            </div>
            <div class="field">
                <input type="password" placeholder="password" autocomplete="off" name="loginPassword" id="loginPasswordFM" />
            </div>
            <div id="loginFMErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                <span id="loginFMErrorMsg"></span>
            </div>
        </div>

        <div class="forgot-password-container">
            <a class="lost no-paywall" id="forgotPasswordFMBtn" href="#">Forgot password?</a>
        </div>        

        <div id="loaderLoginFindMentor" class="loader"></div>
        
        <div class="field-container">
            <div class="action-button">
                <input class="submit_button" type="submit" id="signInSubmitBtn" value="Sign In" name="submit">
            </div>
        </div>

        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>

    </div>
        
</form>