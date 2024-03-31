<section class="internal-header-section">
    <header class="header">        
        <a href="/" class="header-logo-link no-paywall">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/GCC_Logo-Short.svg" class="header-logo" alt="Global Creator's Community" />
        </a>
        <span class="header-main-text large-text">
            <?php echo get_field("header_main_text"); ?>
        </span>                
    </header>
    <?php
        global $wpdb, $user_ID;  

        if (!$user_ID) {  
            //All code goes in here.                        
    ?>
            <div class="user-login-container" id="headerSignIn">
                <div class="header-sign-in-text-container">
                    <span class="header-sign-in-text">
                        Sign in
                    </span>
                </div>
            </div>
    <?php
        }  
        else {  
    ?>      
            <div class="user-login-container">
                <div class="dropdown">
                    <button id="toggleSignInBtn" class="dropbtn" aria-label="Open Dropdown">
                        <!-- <a href="#"> -->
                        <span class="sign-in-user small-text">
                            <?php
                                $current_user = wp_get_current_user();
                                printf( __( '%s', 'textdomain' ), esc_html( $current_user->user_firstname ) );
                            ?>
                        </span>    
                        <!-- </a> -->
                    </button>
                    <a id="myDropdown" class="dropdown-content" href="<?php echo wp_logout_url( home_url() ); ?>">
                        <span class="login_button small-text">
                            Sign Out
                            <?php
                                // $current_user = wp_get_current_user();
                                // printf( __( '%s', 'textdomain' ), esc_html( $current_user->user_firstname ) );
                            ?>
                        </span>
                    </a>
                </div>
            </div>
    <?php
        }
    ?>
</section>       
<!-- /header -->