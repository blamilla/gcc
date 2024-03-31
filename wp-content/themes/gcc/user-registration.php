<div id="user-registration-form" class="form-wrapper">
    <div id="error-message"></div>
    <form method="post" name="user-register-form" id="userRegistrationForm">
        <div class="first-step" id="firstStepForm">
            <div class="step-heading">
                <span class="step-heading-text large-text">
                    We’re so happy you're here! Join the Global Creators Community for Free.
                </span>
            </div>            
            <div class="user-sign-in-text">
                <span class="sign-in-text small-text">
                    Already a member? <a class="no-paywall" id="loginBtn">Sign in</a>
                </span>
            </div>
            <div class="field-container">
                <div class="form-label">
                    <label for="firstname">
                        <?php _e( 'What’s your first name?', 'debate' ); ?>
                    </label>
                </div>
                <div class="field">
                    <input type="text" placeholder="Firstname" autocomplete="off" name="firstname" id="firstname" />
                </div>
                <div id="firstnameErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="firstnameErrorMsg"></span>
                </div>
            </div>

            <div class="field-container">
                <div class="form-label">
                    <label for="lastname">
                        <?php _e( 'And your last name...?', 'debate' ); ?>
                    </label>
                </div>
                <div class="field">
                    <input type="text" placeholder="Lastname" autocomplete="off" name="lastname" id="lastname" />
                </div>
                <div id="lastnameErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="lastnameErrorMsg"></span>
                </div>
            </div>

            <div class="field-container">
                <div class="form-label">
                    <label for="email">
                        <?php _e( "What's your email?", "debate" ); ?>
                    </label>
                </div>
                <div class="field">
                    <input type="email" placeholder="Email" autocomplete="off" name="email" id="email" />
                </div>
                <div id="loaderEmail" class="loader" style="display: none; margin: 0 auto;"></div>
                <div id="emailErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="emailErrorMsg"></span>
                </div>
            </div>

            <div class="field-container">
                <div class="form-label">
                    <label for="user-password">
                        <?php _e( 'Choose a password', 'debate' ); ?>
                    </label>
                </div>
                <div class="field">
                    <input type="password" placeholder="Password" name="password" id="user-password" />
                </div>
                <div id="passwordErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="passwordErrorMsg"></span>
                </div>
            </div>

            <div class="field-container">
                <div class="form-label">
                    <label for="confirm-password">
                        <?php _e( 'Enter password again', 'debate' ); ?>
                    </label>
                </div>
                <div class="field">
                    <input type="password" placeholder="Password" name="confirm-password" id="confirm-password" />
                </div>
                <div id="confirmPasswordErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="confirmPasswordErrorMsg"></span>
                </div>
            </div>

            <div class="field-container">
                <div class="action-button">
                    <input type="button" id="goToStepTwoBtn" value="Next" disabled="disabled" />
                </div>
            </div>
        </div>
            
        <div class="second-step" id="secondStepForm" style="display: none;">
            <div class="step-heading">
                <span class="step-heading-text large-text">
                    We want to get to know you better, 
                    so we can show you content 
                    that’s just right!
                </span>
            </div>            

            <div class="field-container">
                <div class="form-label">
                    <label for="usertype">
                        <?php _e( 'How would you describe yourself?', 'debate' ); ?>
                    </label>
                </div>
                
                <div class="field field-usertype custom-select-wrapper">                    
                    <div class="custom-select" id="usertype-select">                        
                        <span class="medium-text">
                            I am             
                        </span>
                        <div class="custom-select__trigger">                                                        
                            <span class="usertype-text">
                                <!-- an aspiring influencer -->
                            </span>
                            <!-- <div class="arrow"></div> -->
                        </div>
                        <div class="custom-options custom-options-usertype">
                            <span class="custom-option selected" data-value="aspiring-influencer">
                                an aspiring influencer
                            </span>
                            <span class="custom-option" data-value="established-influencer">
                                an established influencer
                            </span>
                            <span class="custom-option" data-value="agency-brand-platform">
                                an agency, brand or platform
                            </span>
                            <span class="custom-option" data-value="advocate">
                                an advocate of creators
                            </span>
                        </div>
                        <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-arrow-back.svg" class="lazyload" alt="User Registration" />
                    </div>
                </div>
            </div>

            <div class="field-container">
                <div class="form-label">
                    <label for="radio-group-mainchannel">
                        <?php _e( 'What’s your main channel?', 'debate' ); ?>
                    </label>
                </div>
                <div class="field field-mainchannel">
                    <ul class="radio-group-mainchannel">
                        <li>
                            <input type="radio" class="radio-input" id="instagram" name="userchannel" value="instagram">
                            <label for="instagram" class="radio-label">
                                <img src="/wp-content/themes/gcc/img/icons/icon-instagram.svg" alt="Instagram">
                            </label>
                        </li>
                        <li>
                            <input type="radio" class="radio-input" id="twitter" name="userchannel" value="twitter">
                            <label for="twitter" class="radio-label">
                                <img src="/wp-content/themes/gcc/img/icons/icon-twitter.svg" alt="Twitter">
                            </label>
                        </li>
                        <li>
                            <input type="radio" class="radio-input" id="youtube" name="userchannel" value="youtube">
                            <label for="youtube" class="radio-label">
                                <img src="/wp-content/themes/gcc/img/icons/icon-youtube.svg" alt="Youtube">
                            </label>
                        </li>
                        <li>
                            <input type="radio" class="radio-input" id="pinterest" name="userchannel" value="pinterest">
                            <label for="pinterest" class="radio-label">
                                <img src="/wp-content/themes/gcc/img/icons/icon-pinterest.svg" alt="Pinterest">
                            </label>
                        </li>
                        <li>
                            <input type="radio" class="radio-input" id="snapchat" name="userchannel" value="snapchat">
                            <label for="snapchat" class="radio-label">
                                <img src="/wp-content/themes/gcc/img/icons/icon-snapchat.svg" alt="Snapchat">
                            </label>
                        </li>
                        <li>
                            <input type="radio" class="radio-input" id="facebook" name="userchannel" value="facebook">
                            <label for="facebook" class="radio-label">
                                <img src="/wp-content/themes/gcc/img/icons/icon-facebook.svg" alt="Facebook">
                            </label>
                        </li>
                        <li>
                            <input type="radio" class="radio-input" id="tiktok" name="userchannel" value="tiktok">
                            <label for="tiktok" class="radio-label">
                                <img src="/wp-content/themes/gcc/img/icons/icon-tiktok.svg" alt="TikTok">
                            </label>
                        </li>
                    </ul>
                </div>
                <div id="userchannelErrorMsgContainer" class="formErrorMsgContainer" style="display: none; margin-top: 15px;">
                    <span id="userchannelErrorMsg"></span>
                </div>
            </div>

            <div class="field-container">
                <div class="form-label">
                    <label for="userhandle">
                        <?php _e( 'What’s your handle?', 'debate' ); ?>
                    </label>
                </div>
                <div class="field">
                    <input type="text" placeholder="type here..." autocomplete="off" name="userhandle" id="userhandle" />
                </div>
                <div id="userhandleErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="userhandleErrorMsg"></span>
                </div>
            </div>

            <div class="field-container">
                <div class="form-label">
                    <label for="userindustry">
                        <?php _e( 'Which industry are you in?', 'debate' ); ?>
                    </label>
                </div>

                <div class="field field-userindustry custom-select-wrapper">                    
                    <div class="custom-select" id="userindustry-select">                        
                        <div class="custom-select__trigger">                    
                            <span class="userindustry-text">
                                Style & Fashion
                            </span>
                            <!-- <div class="arrow"></div> -->
                        </div>
                        <div class="custom-options custom-options-industry">
                            <span class="custom-option selected" data-value="style">
                                Style & Fashion
                            </span>
                            <span class="custom-option" data-value="beauty">
                                Beauty
                            </span>
                            <span class="custom-option" data-value="health">
                                Health & Fitness
                            </span>
                            <span class="custom-option" data-value="food">
                                Food
                            </span>
                            <span class="custom-option" data-value="home">
                                Home & Interiors
                            </span>
                            <span class="custom-option" data-value="entertaining">
                                Entertaining
                            </span>
                            <span class="custom-option" data-value="family">
                                Family
                            </span>
                            <span class="custom-option" data-value="business">
                                Business & Entrepreneurship
                            </span>
                            <span class="custom-option" data-value="animals">
                                Animals & Pets
                            </span>
                            <span class="custom-option" data-value="travel">
                                Travel
                            </span>
                            <span class="custom-option" data-value="photography">
                                Photography
                            </span>
                            <span class="custom-option" data-value="sports">
                                Sports or Gaming
                            </span>
                            <span class="custom-option" data-value="arts">
                                Arts & Crafts
                            </span>
                            <span class="custom-option" data-value="personal-dev">
                                Personal Development
                            </span>
                        </div>
                        <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-arrow-back.svg" class="lazyload" alt="User Registration" />
                    </div>                    
                </div>
                <div id="userindustryErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="userindustryErrorMsg"></span>
                </div>
            </div>

            <input type="hidden" id="comesfrom" />

            <div class="field-container">
                <div class="action-button">
                    <input type="button" id="registerBtn" value="Next" />
                </div>
            </div>
            
        </div>        
    </form>
</div>