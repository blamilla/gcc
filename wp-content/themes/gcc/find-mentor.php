<div id="find-mentor-form" class="form-wrapper">
    <div id="error-message"></div>
    <form method="post" name="find-mentor-form" id="findMentorForm">
        <div class="first-step" id="firstStepFindMentorForm">
            <div class="step-heading">
                <span class="step-heading-text large-text">
                    Ready to connect with someone who can guide you and share the best tips and tricks of the industry?
                </span>
            </div>            
            <div class="field-container">
                <div class="form-label">
                    <label for="find-mentor-userindustry">
                        <?php _e( "What's your industry of focus?", 'debate' ); ?>
                    </label>
                </div>
                <div class="field field-find-mentor-userindustry custom-select-wrapper">                    
                    <div class="custom-select" id="find-mentor-userindustry-select">                        
                        <div class="custom-select__trigger">                    
                            <span class="find-mentor-userindustry-text">
                                Style & Fashion
                            </span>
                            <!-- <div class="arrow"></div> -->
                        </div>
                        <div class="custom-options custom-options-find-mentor-industry">
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
                <div id="findMentorUserindustryErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="findMentorUserindustryErrorMsg"></span>
                </div>
            </div>
            <div class="field-container">
                <div class="form-label">
                    <label for="learning-interest">
                        <?php _e( "What are you most interested in learning?", 'debate' ); ?>
                    </label>
                </div>
                <div class="field field-learning-interest custom-select-wrapper">                    
                    <div class="custom-select" id="learning-interest-select">                        
                        <div class="custom-select__trigger">                    
                            <span class="learning-interest-text">
                                Branding
                            </span>
                            <!-- <div class="arrow"></div> -->
                        </div>
                        <div class="custom-options custom-options-learning-interest">
                            <span class="custom-option selected" data-value="branding">
                                Branding
                            </span>
                            <span class="custom-option" data-value="growth">
                                Growth
                            </span>
                            <span class="custom-option" data-value="ecommerce">
                                E-commerce
                            </span>
                            <span class="custom-option" data-value="licensing">
                                Licensing
                            </span>
                            <span class="custom-option" data-value="publishing">
                                Publishing
                            </span>
                            <span class="custom-option" data-value="tech">
                                Tech
                            </span>
                            <span class="custom-option" data-value="fundraising">
                                Fundraising
                            </span>                            
                        </div>
                        <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-arrow-back.svg" class="lazyload" alt="User Registration" />
                    </div>
                </div>
                <div id="learningInterestErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="learningInterestErrorMsg"></span>
                </div>
            </div>
            <div class="field-container">
                <div class="form-label">
                    <label for="find-mentor-location">
                        <?php _e( 'Where are you based?', 'debate' ); ?>
                    </label>
                </div>
                <div class="field field-find-mentor-location">
                    <input type="text" placeholder="Type location" autocomplete="off" name="find-mentor-location" id="find-mentor-location" />
                </div>
                <div id="findMentorLocationErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="findMentorLocationErrorMsg"></span>
                </div>
            </div>
            <div class="field-container">
                <div class="action-button">
                    <input type="button" id="goToStepTwoFindMentorBtn" value="Next" />
                </div>
            </div>
        </div>
            
        <div class="second-step" id="secondStepFindMentorForm" style="display: none;">
            <div class="step-heading">
                <span class="step-heading-text large-text">
                    Amazing! <br>
                    We will find the perfect match for you and connect you both via email. <br>
                    Look out for it in the next few days.
                </span>
            </div>                        
            <div class="field-container">
                <div class="form-label">
                    <label for="find-mentor-email">
                        <?php _e( "Confirm email", "debate" ); ?>
                    </label>
                </div>
                <div class="field">
                    <?php
                        $current_user = wp_get_current_user();
                    ?>
                    <input type="email" value="<?php echo $current_user->user_email; ?>" placeholder="Email" autocomplete="off" name="find-mentor-email" id="find-mentor-email" />
                </div>
                <div id="findMentorEmailErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="findMentorEmailErrorMsg"></span>
                </div>
            </div>     

            <div id="loaderFindMentor" class="loader"></div>
            
            <div class="field-container confirm-fm-container">
                <div class="action-button">
                    <input type="button" id="confirmFindMentorBtn" value="Done" />
                </div>
            </div>
            
        </div>        
    </form>
</div>