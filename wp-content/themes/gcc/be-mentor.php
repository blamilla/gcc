<div id="be-mentor-form" class="form-wrapper">
    <div id="error-message"></div>
    <form method="post" name="be-mentor-form" id="beMentorForm">
        <div class="first-step" id="firstStepBeMentorForm">
            <div class="step-heading">
                <span class="step-heading-text large-text">
                    Ready to share some of your knowledge with someone eager to learn the ropes? 
                </span>
            </div> 
            <div class="field-container">
                <div class="form-label">
                    <label for="be-mentor-userindustry">
                        <?php _e( "What's your industry of focus?", 'debate' ); ?>
                    </label>
                </div>
                <div class="field field-be-mentor-userindustry custom-select-wrapper">                    
                    <div class="custom-select" id="be-mentor-userindustry-select">                        
                        <div class="custom-select__trigger">                    
                            <span class="be-mentor-userindustry-text">
                                Style & Fashion
                            </span>
                            <!-- <div class="arrow"></div> -->
                        </div>
                        <div class="custom-options custom-options-be-mentor-industry">
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
                <div id="beMentorUserindustryErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="beMentorUserindustryErrorMsg"></span>
                </div>
            </div> 
            <div class="field-container">
                <div class="form-label">
                    <label for="be-mentor-business-aspect">
                        <?php _e( "What business aspect are you an expert in?", 'debate' ); ?>
                    </label>
                </div>
                <div class="field field-business-aspect">
                    <label><input type="checkbox" class="chk-business-aspect" name="chk-business-aspect" value="branding">Branding</label>
                    <label><input type="checkbox" class="chk-business-aspect" name="chk-business-aspect" value="growth">Growth</label>
                    <label><input type="checkbox" class="chk-business-aspect" name="chk-business-aspect" value="ecommerce">E-commerce</label>
                    <label><input type="checkbox" class="chk-business-aspect" name="chk-business-aspect" value="licensing">Licensing</label>
                    <label><input type="checkbox" class="chk-business-aspect" name="chk-business-aspect" value="publishing">Publishing</label>
                    <label><input type="checkbox" class="chk-business-aspect" name="chk-business-aspect" value="tech">Tech</label>
                    <label><input type="checkbox" class="chk-business-aspect" name="chk-business-aspect" value="fundraising">Fundraising</label>
                </div>
                <div id="beMentorBusinessAspectErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="beMentorBusinessAspectErrorMsg"></span>
                </div>
            </div>                                               
            <div class="field-container">
                <div class="action-button">
                    <input type="button" id="goToStepTwoBeMentorBtn" value="Next" />
                </div>
            </div>
        </div>
            
        <div class="second-step" id="secondStepBeMentorForm" style="display: none;">
            <div class="step-heading">
                <span class="step-heading-text large-text">
                    Have you scaled beyond your influence? <br>
                    Definitely don't hold back. <br>
                    We wanna know!
                </span>
            </div>       
            <div class="field-container">
                <div class="form-label">
                    <label for="be-mentor-additional-revenue">
                        <?php _e( 'Do you generate additional revenue with other things?', 'debate' ); ?>
                    </label>
                </div>
                <div class="field field-additional-revenue custom-select-wrapper">                    
                    <div class="custom-select" id="additional-revenue-select">                        
                        <div class="custom-select__trigger">                    
                            <span class="additional-revenue-text">
                                Yes, I sell products
                            </span>
                            <!-- <div class="arrow"></div> -->
                        </div>
                        <div class="custom-options custom-options-additional-revenue">
                            <span class="custom-option selected" data-value="sell-products">
                                Yes, I sell products
                            </span>
                            <span class="custom-option" data-value="sell-services">
                                Yes, I sell services
                            </span>
                            <span class="custom-option" data-value="still-boss">
                                No, but I'm still a boss
                            </span>                            
                        </div>
                        <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-arrow-back.svg" class="lazyload" alt="User Registration" />
                    </div>
                </div>
                <div id="additionalRevenueErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="additionalRevenueErrorMsg"></span>
                </div>                
            </div>            
            <div class="field-container">
                <div class="form-label">
                    <label for="be-mentor-location">
                        <?php _e( 'Lastly, where are you based?', 'debate' ); ?>
                    </label>
                </div>
                <div class="field field-be-mentor-location">
                    <input type="text" placeholder="Type location" autocomplete="off" name="be-mentor-location" id="be-mentor-location" />
                </div>
                <div id="beMentorLocationErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="beMentorLocationErrorMsg"></span>
                </div>
            </div>                                
            <div class="field-container goToThirdStep-container">
                <div class="action-button">
                    <input type="button" id="goToStepThreeBeMentorBtn" value="Next" />
                </div>
            </div>
        </div>
        <div class="third-step" id="thirdStepBeMentorForm" style="display: none;">
            <div class="step-heading">
                <span class="step-heading-text large-text">
                    Amazing! <br>
                    We will find the perfect match for you and connect you both via email. <br>
                    Look out for it in the next few days.
                </span>
            </div>                                                      
            <div class="field-container">
                <div class="form-label">
                    <label for="be-mentor-email">
                        <?php _e( "Confirm email", "debate" ); ?>
                    </label>
                </div>
                <div class="field">
                    <?php
                        $current_user = wp_get_current_user();
                    ?>
                    <input type="email" value="<?php echo $current_user->user_email; ?>" placeholder="Email" autocomplete="off" name="be-mentor-email" id="be-mentor-email" />
                </div>
                <div id="beMentorEmailErrorMsgContainer" class="formErrorMsgContainer" style="display: none;">
                    <span id="beMentorEmailErrorMsg"></span>
                </div>
            </div>     

            <div id="loaderBeMentor" class="loader"></div>
            
            <div class="field-container confirm-bm-container">
                <div class="action-button">
                    <input type="button" id="confirmBeMentorBtn" value="Done" />
                </div>
            </div>
            
        </div>        
    </form>
</div>