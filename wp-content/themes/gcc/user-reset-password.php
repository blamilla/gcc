<form name="resetpassform" id="resetPasswordForm" action="<?php echo site_url( 'wp-login.php?action=resetpass' ); ?>" method="post" autocomplete="off">
    <!-- <input type="hidden" id="user_login" name="rp_login" value="<?php echo esc_attr( $rp_login ); ?>" autocomplete="off" /> -->
    <input type="hidden" id="user_login" name="rp_login" value="<?php echo esc_attr( $_GET["login"] ); ?>" autocomplete="off" />
    <input type="hidden" name="rp_key" value="<?php echo esc_attr( $_GET["key"] ); ?>" />

    <div class="reset-password-form-container">
        <div class="step-heading">
            <span class="step-heading-text large-text">
                Great! You’re back. <br>
                Reset your password below.
            </span>
        </div>            
        <div class="field-container reset-password-pass-container">
            <div class="form-label">
                <label for="pass1">
                    <?php _e( 'Choose a new password' ); ?>
                </label>
            </div>
            <div class="field">
                <input type="password" placeholder="password" data-reveal="1" data-pw="<?php echo esc_attr( wp_generate_password( 16 ) ); ?>" name="pass1" id="pass1" class="input password-input" size="24" value="" autocomplete="off" aria-describedby="pass-strength-result" />
            </div>
            <div id="resetPass1ErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                <span id="resetPass1ErrorMsg"></span>
            </div>
        </div>
        <div class="field-container reset-password-confirmpass-container">
            <div class="form-label">
                <label for="pass2">
                    <?php _e( 'Enter password again' ); ?>
                </label>
            </div>
            <div class="field">
                <input type="password" placeholder="password confirmation" name="pass2" id="pass2" class="input" size="20" value="" autocomplete="off" />
            </div>
            <div id="resetPass2ErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                <span id="resetPass2ErrorMsg"></span>
            </div>
        </div>
    </div>

    <div id="loaderResetPassword" class="loader"></div>
        
    <div class="field-container reset-password-button-container">
        <div class="action-button">
            <input class="submit_button" type="button" id="resetBtn" value="<?php esc_attr_e( 'Next' ); ?>" name="wp-submit" disabled="disabled">
        </div>
    </div>

    <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
</form>