<form name="forgotpasswordform" id="forgotPasswordForm" action="<?php echo esc_url( network_site_url( 'wp-login.php?action=lostpassword', 'login_post' ) ); ?>" method="post">
    <div class="forgot-password-form-container">
        <div class="step-heading">
            <span class="step-heading-text large-text">
                Forgot your password? <br>
                We’ll help you reset it!
            </span>
        </div>            
        <div class="field-container forgot-password-email-container">
            <div class="form-label">
                <label for="user_login">
                    <?php _e( "What's your email?", "debate" ); ?>
                </label>
            </div>
            <div class="field">
                <input type="email" placeholder="what's your email?" autocomplete="off" name="user_login" id="user_login" />
            </div>
            <div id="resetEmailErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                <span id="resetEmailErrorMsg"></span>
            </div>
        </div>
        
        <input type="hidden" name="redirect_to" value="<?php echo home_url() . '?emailsent=true'; ?>" />
        
        <div id="loaderResetEmail" class="loader"></div>
        
        <div class="field-container send-link-button-container">
            <div class="action-button">
                <input class="submit_button" type="button" id="resetLinkBtn" value="<?php esc_attr_e( 'Send Reset Link' ); ?>" name="wp-submit">
            </div>
        </div>

        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
    </div>
</form>