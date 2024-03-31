<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?>
    </title>

    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png"
        rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="theme-color" content="#0A3B22">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <link rel="prefetch" as="font" type="font/otf"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/Circular/CircularStd-Medium.otf" crossorigin>
    <link rel="prefetch" as="font" type="font/ttf"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/RockSalt/RockSalt-Regular.ttf" crossorigin>
    <link rel="prefetch" as="font" type="font/woff"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/Schynder/Typeface/ForWeb/SchnyderWideL-Demi-Web.woff" crossorigin>
    
    <style type="text/css">
        html, body {
            height: 100%;
            min-height: 100%;
            font-family: "Montserrat";
        }

        
        body {
            margin: 0;
            padding: 0;	
        }
        

        a {
            text-decoration: none;
        }

        ul{
            list-style-type: none;
            padding: 0px 0px;
        }
        
        ul li{
            text-transform: uppercase;
            line-height: 2.5em;
            border-bottom: 0.5px solid #dfdfdf;
        }

        label{
            display: block;
            font-size: 14px;
        }

        .wrapper {
            position: relative;
            width: 100%;	
            height: 100%;
        }

        .small-text{
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            letter-spacing: 0;
            font-weight: 300;
            color: #1A1A1A;
        }

        .medium-text{
            font-family: CircularMed;
            font-size: 40px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 50px;
            color: #1A1A1A;
        }

        .large-text{
            font-family: Schnyder;
            font-size: 40px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 50px;
            color: #1A1A1A;
        }

        .owl-carousel {
            display: none; 
        }

        .owl-carousel.owl-loaded {
            display: block;
        }

        .main-container-404{
            display: flex;
            height: 100%;
            justify-content: center;
            text-align: center;
            align-items: center;
        }

        .main-container-404 .container-404{
            display: flex;
            flex-direction: column;
        }

        .main-container-404 .container-404 .top-text-404{
            color: #1A1A1A;
            font-family: "Schnyder";
            font-size: 60px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 50px;
        }

        .main-container-404 .container-404 .main-text-404{
            max-width: 491px;
            color: #1A1A1A;
            font-family: "RockSalt";
            font-size: 18px;
            letter-spacing: 5.63px;
            line-height: 40px;
            padding-top: 69px;
        }

        .main-container-404 .container-404 .button-404{
            padding-top: 60px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .main-container-404 .container-404 .button-404 span{
            font-family: CircularBook;
            font-size: 16px;
            font-weight: 300;
            letter-spacing: 0;
            line-height: 22px;
            border-radius: 30px;
            height: 44px;
            width: 161px;
            background: #1A1A1A;
            color: #FFFFFF;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .chosen-container{
            vertical-align: unset;
        }

        .chosen-container-single .chosen-drop {
            margin-top: 30px !important;
            border: none;
        }

        .chosen-container-single  .chosen-single {
            border: none !important;
            background: none !important;
            box-shadow: none !important;
            height: 20px;
        }

        .chosen-container-single .chosen-single span {
            font-family: CircularMed;
            font-size: 40px;
            font-weight: 500;
            line-height: 50px;
            color: #93E0FF;
            border-bottom: 1px solid black;
            padding-bottom: 10px;
            margin-left: 10px !important;
        }

        .chosen-container-single .chosen-single div {
            display: none !important;
        }
            
        .chosen-container-single .chosen-single b {
            display: none !important;
        }

        .chosen-single {
            border: none;
            background: #fff;
            box-shadow: none;
            height: 20px;
        }
         
        .chosen-single span {
            font-family: CircularMed;
            font-size: 40px;
            font-weight: 500;
            line-height: 50px;
            color: #93E0FF;
            border-bottom: 1px solid black;
            padding-bottom: 10px;
            margin-left: 10px;
        }

        .chosen-single div{
            display: none;
        }

        .chosen-single b{
            display: none;
        }

        form .field-container{
            padding-top: 40px;
        }
        
        form .field-container .form-label label {
            font-family: CircularMed;
            font-size: 12px;
            line-height: 15px;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 500;
        }
                
        form .field-container .field {
            border-bottom: 1px solid #000000;
            box-sizing: border-box;
        }

        form .field-container .field input {
            height: 50px;
            background: none;
            border: none;
            text-align: center;
            font-family: CircularMed;
            font-size: 32px;
            color: #1A1A1A;
            line-height: 40px;
            font-weight: 500;
            width: 100%;
            padding: 0px;
        }

        form .field-container .field input:focus{
            outline: none;
        }

        form .field-container .field input::-webkit-input-placeholder { /* Edge */
            color: rgba(26,26,26,0.3);
            line-height: 50px;
        }
                        
        form .field-container .field input::-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: rgba(26,26,26,0.3);
            line-height: 50px;
        }
                        
        form .field-container .field input::placeholder {
            color: rgba(26,26,26,0.3);
            line-height: 50px;
        }

        form .field-container .action-button {
            padding-bottom: 30px;
        }
                    
        form .field-container .action-button input {
            font-family: CircularBook;
            font-size: 16px;
            font-weight: 300;
            letter-spacing: 0;
            line-height: 22px;
            border-radius: 30px;
            height: 44px;
            width: 95px;
            background: #1A1A1A;
            -webkit-appearance: none;
            color: #FFFFFF;
            border: none;
            cursor: pointer;
        }

        form .field-container .action-button input:disabled {
            opacity: 0.7;
            cursor: default;
        }

        form .field-container .formErrorMsgContainer{
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #FFFFFF;
        }
                 
        form .field-container .formErrorMsgContainer span {
            font-family: CircularBook;
            font-size: 10px;
            line-height: 16px;
        }

        /**===== loader =====*/
        .loader {
            color: #1A1A1A;
            font-size: 10px;
            margin: 0px auto;
            position: relative;
            text-indent: -9999em;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
            border-radius: 50%;
            width: 10px;
            height: auto;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation: load7 1.8s infinite ease-in-out;
            animation: load7 1.8s infinite ease-in-out;
        }

        .loader:before, .loader:after{
            content: '';
            position: absolute;
            top: 0;
            border-radius: 50%;
            width: 10px;
            height: 10px;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation: load7 1.8s infinite ease-in-out;
            animation: load7 1.8s infinite ease-in-out;
        }

        .loader:before{
            left: -3.5em;
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .loader:after{
            left: 3.5em;
        }

        #loaderResetEmail{
            height: auto;
        }

        #loaderFindMentor{
            height: auto;
        }

        #loaderBeMentor{
            height: auto;
        }

        ::-webkit-scrollbar {
            width: 0px;  /* Remove scrollbar space */
            background: transparent;  /* Optional: just make scrollbar invisible */
        }

        .header-section, .internal-header-section {
            display: flex;
            flex-flow: column nowrap;
            align-items: center;
        }  
         
        .header-section .header, .internal-header-section  .header{
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-top: 80px;
        }    
            
        .header-section .header .header-intro-text, .internal-header-section .header .header-intro-text {
            padding-bottom: 35px;
        }

        .header-section .header .header-logo-link, .internal-header-section .header .header-logo-link{
            cursor: pointer;
        }

        .header-section .header .header-logo-link img {
            width: 423px;
            /* height: 58px; */
        }

        .internal-header-section .header .header-logo-link img {
            width: 152px !important;
        }

        .header-section .header .header-main-text, .internal-header-section .header .header-main-text {
            color: #1A1A1A;
            padding-top: 20px;
            max-width: 650px;
        }
            
        .header-section .user-login-container, .internal-header-section .user-login-container {
            position: absolute;
            top: 0px;
            right: 0;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 262px;
            /* background-color: #fff5ec; */
            cursor: pointer;
        }
                
        .header-section .user-login-container .header-sign-in-text-container, 
        .internal-header-section .user-login-container .header-sign-in-text-container {
            padding-left: 30px;
            padding-right: 20px;
        }        
        
        .header-section .user-login-container .header-sign-in-text-container .header-sign-in-text,
        .internal-header-section .user-login-container .header-sign-in-text-container .header-sign-in-text {
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            cursor: pointer;
        }

        .sticky-navbar .user-login-container{
            position: absolute;
            top: 0px;
            right: 0;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 262px;
            /* background-color: #fff5ec; */
            cursor: pointer;
        }
                
        .sticky-navbar .user-login-container .header-sign-in-text-container{
            padding-left: 30px;
            padding-right: 20px;
        }        
        
        .sticky-navbar .user-login-container .header-sign-in-text-container .header-sign-in-text{
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            cursor: pointer;
        }

        .footer {
            background: #1A1A1A;
            padding-top: 60px;
            padding-bottom: 40px;
        }       
        
        .footer .footer-logo{
            padding: 0px 70px 30px 70px;
        }

        .footer .footer-logo a{
            cursor: pointer;
        }
            
        .footer .footer-container{
            display: flex;
            align-items: start;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 0px 70px 170px 70px;
            color: #1A1A1A;
        }

        .footer .footer-container span {
            line-height: 18px;
        }

        .footer .footer-container p {
            margin: 0;
            color: #FFFFFF;
        }

        .footer .footer-container p a{
            font-size: 12px;
            line-height: 15px;
            font-family: CircularMed;
            letter-spacing: 2px;
            color: #FFFFFF;
        }
        
        .footer .footer-container .footer-first-column{
            max-width: 444px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding-bottom: 30px;
        }

        .footer .footer-container .footer-first-column .small-text{
            line-height: 22px;
            max-width: 333px;
            color: #FFFFFF;
        }

        .footer .footer-container .footer-last-column-375{
            display: none;
        }

        .footer .footer-container .footer-second-column{
            max-width: 332px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* padding-bottom: 30px;
            margin-top: -7px; */
        }

        .footer .footer-container .footer-second-column span{
            text-transform: uppercase;
            padding-bottom: 20px;
        }

        .footer .footer-container .footer-third-column{
            max-width: 332px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* padding-bottom: 30px;
            margin-top: -7px; */
        }

        .footer .footer-container .footer-third-column span{
            text-transform: uppercase;
            padding-bottom: 20px;
        }

        .footer .footer-container .footer-last-column{
            max-width: 192px;
            width: 100%;
            display: flex;
            align-items: flex-start;
            padding-bottom: 30px;
            justify-content: flex-start;
        }
              
        .footer .footer-copyright{
            text-align: center;
            font-size: 16px;
            line-height: 22px;
            color: #FFFFFF;
            font-family: CircularBook;
        }        

        .spacing{
            padding: 50px 0px;
        }

        section {
            max-width: 1400px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }

        hr{
            height: 1px;
            background-color: #1A1A1A;
            border: none;
            max-width: 1300px;
            width: 100%;
        }

        .modal {
            position: absolute;
            z-index: 10000; /* 1 */
            top: 0;
            left: 0;
            visibility: hidden;
            width: 100%;
            height: 100%;
        }

        .modal .modal-transition {
            transition: all 0.3s 0.12s;
            transform: translateY(-10%);
            opacity: 0;
        }

        .modal .modal-overlay {
            position: fixed;
            z-index: 10;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: hsla(0, 0%, 0%, 0.5);
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s linear 0.3s, opacity 0.3s;
        }

        .modal .modal-wrapper {
            position: absolute;
            z-index: 9999;
            top: 1em;
            max-width: 695px;
            width: 100%;
            background-color: #93E0FF;
            box-shadow: 0 0 1.5em hsla(0, 0%, 0%, 0.35);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .modal .modal-wrapper .modal-header {
            position: relative;
            width: 100%;
            padding-left: 0;
            padding-right: 0;
        }
         
        .modal .modal-wrapper .modal-header .modal-close {
            position: absolute;
            top: 0;
            right: 0;
            padding-top: 30px;
            padding-right: 30px;
            color: #aaa;
            background: none;
            border: 0;
            outline: 0;
        }

        .modal .modal-wrapper .modal-header .modal-close .icon-close{
            cursor: pointer;
        }

        .modal .modal-wrapper .modal-header .modal-close .icon-close img{
            width: 20px;
            height: 20px;
        }

        .modal .modal-wrapper .modal-body {
            max-width: 575px;
            width: 100%;
            text-align: center;
        }
            
        .modal .modal-wrapper .modal-body .modal-content>:first-child {
            margin-top: 0;
        }
              
        .modal .modal-wrapper .modal-body .modal-content>:last-child {
            margin-bottom: 0;
        }
           
        .modal .modal-wrapper .modal-body .modal-content{
            padding-top: 30px;
        }
        .modal .modal-wrapper .modal-body .modal-content .user-sign-in-text {
            padding-top: 30px;
            padding-bottom: 20px;
        }        

        .modal .modal-wrapper .modal-body .modal-content .user-sign-in-text .sign-in-text a {
            cursor: pointer;
            color: #FFFFFF;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-user-login-container.login-be-mentor{
            display: none;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-user-login-container .user-sign-in-text {
            padding-bottom: 20px;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-user-login-container .formErrorMsgContainer .formErrorMsgContainer {
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #FFFFFF;
            margin-top: 20px;
        }
        
        .modal .modal-wrapper .modal-body .modal-content .modal-user-registration-container .step-heading {
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
        }
        
        .modal .modal-wrapper .modal-body .modal-content .modal-user-registration-container .step-heading .step-heading-text {
            font-size: 32px;
            letter-spacing: 0;
            line-height: 40px;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-success-registration-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-find-mentor-container .step-heading {
            max-width: 531px;
            margin: 0 auto;
            text-align: center;
        }
        
        .modal .modal-wrapper .modal-body .modal-content .modal-find-mentor-container .step-heading .step-heading-text {
            font-size: 32px;
            letter-spacing: 0;
            line-height: 40px;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-exists-find-mentor-record-container .step-heading {
            max-width: 531px;
            margin: 0 auto;
            text-align: center;
        }
        
        .modal .modal-wrapper .modal-body .modal-content .modal-exists-find-mentor-record-container .step-heading .step-heading-text {
            font-size: 32px;
            letter-spacing: 0;
            line-height: 40px;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-exists-find-mentor-record-container .step-heading .step-heading-text .find-mentor-firstname {
            text-transform: capitalize;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-exists-find-mentor-record-container #newFindMentorRequestBtn {
            -webkit-appearance: none;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-be-mentor-container .step-heading {
            max-width: 555px;
            margin: 0 auto;
            text-align: center;
        }
        
        .modal .modal-wrapper .modal-body .modal-content .modal-be-mentor-container .step-heading .step-heading-text {
            font-size: 32px;
            letter-spacing: 0;
            line-height: 40px;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-exists-be-mentor-record-container .step-heading {
            max-width: 531px;
            margin: 0 auto;
            text-align: center;
        }
        
        .modal .modal-wrapper .modal-body .modal-content .modal-exists-be-mentor-record-container .step-heading .step-heading-text {
            font-size: 32px;
            letter-spacing: 0;
            line-height: 40px;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-exists-be-mentor-record-container .step-heading .step-heading-text .be-mentor-firstname {
            text-transform: capitalize;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-exists-be-mentor-record-container #newBeMentorRequestBtn {
            -webkit-appearance: none;
        }

        .modal-user, 
        .modal-login, 
        .modal-mentorship, 
        .modal-coming-soon, 
        .modal-coming-soon-375,
        .modal-mentorship-375,
        .modal-forgot-password,
        .modal-reset-password {
            display: flex;
            justify-content: center;
        }

        .modal-user .modal-wrapper .modal-body .modal-content .modal-find-mentor-container .second-step .step-heading{
            padding-bottom: 32px;
        }

        .modal-user .modal-wrapper{
            max-height: 100%;
            height: auto;
            overflow: auto;
        }

        .modal-user .modal-wrapper .modal-body .modal-content .modal-user-registration-container .second-step .step-heading{
            padding-bottom: 32px;
        }

        .modal-user .modal-wrapper .modal-body .modal-content .modal-success-registration-container .step-heading .step-heading-text{
            font-size: 32px;    
        }

        .modal-user .modal-wrapper .modal-body .modal-content .modal-user-login-container .forgot-password-form-container .step-heading .step-heading-text{
            font-size: 32px;
        }

        .modal-user .modal-wrapper .modal-body .modal-content .modal-user-login-container .modal-success-registration-container .step-heading .step-heading-text{
            font-size: 32px;
        }

        .modal-user .modal-wrapper .modal-body .modal-content .modal-user-login-container .modal-success-registration-container .email-sent-button-container .action-button input{
            width: 158px;
        }

        .modal-login .modal-wrapper .modal-body .modal-content .modal-user-login-container .login-form-container .step-heading .step-heading-text{
            font-size: 32px;
            line-height: 40px;
        }

        .modal-login .modal-wrapper .modal-body .modal-content .modal-user-login-container .login-form-container .field-container{
            padding-top: 33px;
        }

        .modal-login .modal-wrapper .modal-body .modal-content .modal-user-login-container .login-form-container .field-container .action-button input{
            width: 110px;
        }

        .modal-forgot-password .modal-wrapper .forgot-password-form-container .forgot-password-email-container{
            padding-top: 115px;
        }

        .modal-forgot-password .modal-wrapper .forgot-password-form-container .forgot-password-email-container .field input{
            width: 100%;
        }

        .modal-forgot-password .modal-wrapper .forgot-password-form-container .send-link-button-container{
            padding-top: 60px;
        }

        .modal-forgot-password .modal-wrapper .forgot-password-form-container .send-link-button-container .action-button{
            padding-bottom: 145px;
        }

        .modal-forgot-password .modal-wrapper .forgot-password-form-container .send-link-button-container #resetLinkBtn{
            width: 175px;
        }

        .modal-forgot-password .modal-wrapper .modal-success-registration-container .email-sent-button-container{
            padding-top: 60px !important;
        }

        .modal-forgot-password .modal-wrapper .modal-success-password-changed-container .password-changed-button-container{
            padding-top: 60px !important;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-user-reset-password-container .user-sign-in-text {
            padding-bottom: 20px;
        }

        .modal .modal-wrapper .modal-body .modal-content .modal-user-reset-password-container .formErrorMsgContainer .formErrorMsgContainer {
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #FFFFFF;
            margin-top: 20px;
        }

        .modal-reset-password .modal-wrapper .reset-password-form-container .reset-password-pass-container{
            padding-top: 90px !important;
        }

        .modal-reset-password .modal-wrapper .reset-password-button-container{
            padding-top: 60px !important;
        }

        .modal-reset-password .modal-wrapper .reset-password-button-container .action-button{
            padding-bottom: 65px !important;
        }

        .modal-coming-soon, .modal-coming-soon-375{
            /* position: relative; */
            position: absolute;
            left: -250px;
            top: 2900px;
        }

        .modal-coming-soon .modal-wrapper, .modal-coming-soon-375 .modal-wrapper{
            width: 360px;
            height: 202px;
            right: 0px;
        }

        .modal-coming-soon .modal-wrapper .modal-content, .modal-coming-soon-375 .modal-wrapper .modal-content{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .modal-coming-soon .modal-wrapper .modal-content .coming-soon-title, .modal-coming-soon-375 .modal-wrapper .modal-content .coming-soon-title{
            font-family: Schnyder;
            color: #1A1A1A;
            font-size: 32px;
            line-height: 40px;
            text-align: center;
        }

        .modal-coming-soon .modal-wrapper .modal-content .coming-soon-text, .modal-coming-soon-375 .modal-wrapper .modal-content .coming-soon-text{
            padding-top: 20px;
            font-family: CircularBook;
            color: #1A1A1A;
            font-size: 16px;
            line-height: 22px;
            text-align: center;
        }

        .modal-header,
        .modal-content {
            padding: 1em;
        }

        .user-section{
            display: flex;
            justify-content: center;
            padding-top: 45px;
        }

        .user-section .type-user-container {
            display: flex;
            justify-content: space-evenly;
            max-width: 820px;
            height: 62px;
        }

        .custom-select-wrapper {
            position: relative;
            user-select: none;
            width: 100%;
            display: flex;
        }        

        .custom-select {
            position: relative;
            display: flex;
            flex-direction: row;
        }  

        .custom-select .medium-text{
            padding-right: 10px;
            line-height: 40px;
            border-bottom: none;
            padding-bottom: 10px;
        }          

        .custom-select__trigger {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-family: CircularMed;
            font-size: 40px;
            padding-bottom: 10px;
            font-weight: 500;
            line-height: 50px;
            color: #93E0FF;
            cursor: pointer;
        }

        .custom-select__trigger span{
            padding-right: 10px;
            line-height: 50px;
            border-bottom: 1px solid #1A1A1A;
            padding-bottom: 10px;
        }                  

        .custom-options {
            position: absolute;
            display: block;
            top: 90%;
            left: 0;
            right: 0;
            border-top: 0;
            background: #fff;
            transition: all 0.5s;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            z-index: 2;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
        }

        .custom-select.open .custom-options {
            opacity: 1;
            visibility: visible;
            pointer-events: all;
        }

        .custom-option {
            position: relative;
            display: block;
            text-align: center;
            padding: 10px 0px;
            cursor: pointer;
            color: #1A1A1A;
            font-family: "CircularMed";
            font-size: 32px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 40px;
            border-bottom: 1px solid #1A1A1A;
            transition: all 0.5s;
        }

        .custom-option:last-child{
            border-bottom: none;
        }

        .custom-option:hover {
            cursor: pointer;
            color: #93E0FF;
        }

        .custom-option.selected {
            color: #ffffff;
            background-color: #93E0FF;
        }

        /* CODE FOR THE DROPDOWN ARROW */
        .arrow {
            position: relative;
            height: 15px;
            width: 15px;
        }

        .arrow::before, .arrow::after {
            content: "";
            position: absolute;
            bottom: 0px;
            width: 0.15rem;
            height: 100%;
            transition: all 0.5s;
        }

        .arrow::before {
            left: -5px;
            transform: rotate(45deg);
            background-color: #394a6d;
        }

        .arrow::after {
            left: 5px;
            transform: rotate(-45deg);
            background-color: #394a6d;
        }

        .open .arrow::before {
            left: -5px;
            transform: rotate(-45deg);
        }

        .open .arrow::after {
            left: 5px;
            transform: rotate(45deg);
        }
        /* END CODE FOR DROPDOWN ARROW */

        .modal-mentorship .modal-wrapper{
            max-height: 100%;
            height: auto;
            overflow: auto;
        }

        .modal-mentorship .modal-close{
            outline: 0;
        }
        
        .modal-mentorship .modal-wrapper .modal-body .modal-tabs{
            display: flex;
            justify-content: center;
            padding-top: 45px;
        }

        .modal-mentorship .modal-wrapper .modal-body .modal-tabs span{
            cursor: pointer;
            text-transform: uppercase;
            font-family: CircularMed;
            font-size: 16px;
            line-height: 20px;
            letter-spacing: 2.67px;
        }

        .modal-mentorship .modal-wrapper .modal-body .modal-tabs .find-mentor-tab{
            padding-right: 10px;
            opacity: 0.4;
        }

        .modal-mentorship .modal-wrapper .modal-body .modal-tabs .be-mentor-tab{
            padding-left: 10px;
            opacity: 0.4;
        }

        .modal-mentorship .modal-wrapper .modal-body .modal-content{
            padding-top: 20px;
            height: 100%;
            max-height: 630px;
        }

        .modal-mentorship .modal-wrapper .modal-body .be-mentor-container{
            display: none;
        }

        .modal-mentorship .modal-wrapper .modal-body .find-mentor-container-375{
            display: none;
        }

        .modal-mentorship .modal-wrapper .modal-body .be-mentor-container-375{
            display: none;
        }        

        .modal-header,
        .modal-content {
            padding: 1em;
        }

        .user-section{
            display: flex;
            justify-content: center;
            padding-top: 45px;
        }

        .user-section .type-user-container {
            display: flex;
            justify-content: space-evenly;
            max-width: 820px;
            height: 62px;
        }

        .user-section .type-user-container .type-user-selection select {
            border: none;
            color: #93E0FF;
            border-bottom: 1px solid #1A1A1A;
            -o-appearance: none;
            -ms-appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            text-align-last: center;
            -moz-text-align-last: center;
            -ms-text-align-last: center;
        }
              
        .user-section .type-user-container .type-user-selection select option{
            font-size: 25px;
        }

        .user-section .type-user-container .user-selection-arrow {
            height: 40px;
            vertical-align: middle;
            display: flex;
            align-items: center;
            transform: rotate(180deg);
        }

        .user-section .type-user-container .user-selection-arrow button {
            cursor: pointer;
            border: none;
            background: none;
            padding: 0;
        }
         
        .user-section .type-user-container .user-selection-arrow button img {
            width: 21px;
            height: 12px;
        }

        .slider-section{
            padding-top: 75px;
            /* height: 330px; */
            height: auto;
            align-items: flex-start;
        }

        .slider-section .slider-background-line {
            background: #000;
            height: 1px;
            width: 100%;
            //position: absolute;
            position: relative;
            z-index: -9999;
            //top: 685px;
            top: 100px;
        }

        .slider-section .owl-carousel {
            height: auto !important;
        }

        .slider-section .owl-carousel div{
            max-height: 400px;
        }
        
        .slider-section .owl-carousel .owl-item1{
            max-width: 250px;
        }

        .slider-section .owl-carousel .owl-item2{
            max-width: 250px;
        }

        .slider-section .owl-carousel .owl-item3{
            max-width: 250px;
            margin-top: 70px;
        }

        .slider-section .owl-carousel .owl-item4{
            max-width: 250px;
        }

        .slider-section .owl-carousel .owl-item5{
            max-width: 250px;
        }

        .slider-section .owl-carousel .owl-item6{
            max-width: 250px;
            margin-top: 40px;
        }

        .slider-section .owl-carousel .owl-item7{
            max-width: 250px;
        }

        .slider-section .owl-carousel .owl-item8{
            max-width: 275px;
        }

        .slider-section .owl-carousel .owl-item9{
            max-width: 250px;
        }

        .slider-section .owl-carousel .owl-item10{
            max-width: 250px;
            margin-top: 30px;
        }

        .slider-section .owl-carousel .owl-item11{
            max-width: 250px;
        }

        .slider-section .owl-carousel .owl-item12{
            max-width: 250px;
            margin-top: 70px;
        }

        .slider-section .owl-carousel .owl-item13{
            max-width: 250px;
        }

        .slider-section .owl-carousel .owl-item14{
            max-width: 250px;
            margin-top: 50px;
        }

        .slider-section .owl-carousel .owl-item15{
            max-width: 250px;
            margin-top: 40px;
        }

        .slider-section .owl-carousel .owl-item16{
            max-width: 250px;
        }

        .slider-section .owl-carousel .owl-item17{
            max-width: 250px;
            margin-top: 50px;
        }

        .slider-section .owl-carousel .owl-item18{
            max-width: 250px;
        }

        .blog-posts-section{
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 75px;
        }
        
        .blog-posts-section .blog-posts-container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            max-width: 1350px;
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container{
            width: 100%;
            //max-width: 1200px;
        }
         
        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container{
                display: flex;
                justify-content: center;
                flex-direction: column;
                max-width: 1200px;
                width: 100%;
                padding-left: 40px;
                padding-right: 100px;
        }        

        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-post-container{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-main-left-title{
            padding-bottom: 30px;            
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-post-left{
            width: 50%;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            max-width: 525px;
        }        

        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-post-container .blog-posts-post-left .blog-posts-post-left-title p,
        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-post-container .blog-posts-post-left .blog-posts-post-left-title pre,
        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-post-container .blog-posts-post-left .blog-posts-post-left-title pre span,
        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-post-container .blog-posts-post-left .blog-posts-post-left-title p span {
            font-family: CircularMed;
            font-size: 40px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 50px;
            margin: 0;
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-post-container .blog-posts-post-left .blog-posts-post-left-text p:first-child {
            padding-top: 30px;
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-post-container .blog-posts-post-left .blog-posts-post-left-text p {
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            letter-spacing: 0;
            font-weight: 300;
            margin: 0;
            /* display: flex; */
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-post-container .blog-posts-post-left .blog-posts-post-left-text p img {
            max-width: 21px;
            max-height: 12px;
            /* padding-left: 5px; */
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-post-container .blog-posts-post-left .blog-posts-post-left-text p a {
            /* display: flex;
            align-items: baseline; */
            width: 100%;
            cursor: pointer;
            color: #93E0FF !important;
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-post-container .blog-posts-post-right {
            width: 50%;
            text-align: right;
            display: flex;
            justify-content: center;
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container .blog-posts-main-posts-container .blog-posts-post-container .blog-posts-post-right img {
            max-width: 525px;
            max-height: 320px;
            object-fit: cover;
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container #owl-carousel-blog-posts .owl-stage-outer {
            max-width: 1240px;
            margin: 0 auto;
            z-index: 1;
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container #owl-carousel-blog-posts .owl-stage-outer .owl-stage .owl-item {
            display: flex;
            justify-content: center
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container #owl-carousel-blog-posts .owl-nav {
            display: flex;
            justify-content: space-between;
            position: relative;
            top: -190px;
            margin: 0 25px;
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container #owl-carousel-blog-posts .owl-nav button {
            font-size: 50px
        }

        .blog-posts-section .blog-posts-container .blog-posts-main-container #owl-carousel-blog-posts .owl-dots{
            display: none;
        }

        .creator-stories-section {
            padding-top: 50px;
            display: flex;
            align-items: center;
            max-height: 680px;
            height: 680px;
            background-size: cover!important;
            background-position: 50%;
            flex-direction: column;
            justify-content: flex-start;
        }

        .creator-stories-section .creator-stories-container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            flex-wrap: wrap;
            height: 100%;
        }

        .creator-stories-section .creator-stories-container .creator-stories-title {
            text-align: center;
            text-transform: uppercase;
            color: #fff;
            letter-spacing: 2.67px;
            line-height: 20px
        }

        .creator-stories-section .creator-stories-container .creator-stories-main-text-container {
            max-width: 1080px;
            text-align: center;
            padding-top: 25px;
        }

        .creator-stories-section .creator-stories-container .creator-stories-main-text-container .creator-stories-main-text {
            font-family: Schnyder;
            font-size: 60px;
            color: #ffffff;
            line-height: 70px
        }

        .creator-stories-section .creator-stories-bottom-box {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #1a1a1a;
            position: relative;
            top: 70px;
            margin-top: 215px;
            max-height: 150px;
            max-width: 413px;
            margin: 0 auto;
            width: 100%;
            height: 146px
        }

        .creator-stories-section .creator-stories-bottom-box .creator-stories-bottom-text-container {
            width: 400px;
            text-align: center;
            padding: 40px 0px;
        }

        .creator-stories-section .creator-stories-bottom-box .creator-stories-bottom-text-container .creator-stories-bottom-text {
            max-width: 260px
        }

        .creator-stories-section .creator-stories-bottom-box .creator-stories-bottom-text-container .creator-stories-bottom-text p {
            margin: 0;
            line-height: 22px
        }

        .creator-stories-section .creator-stories-bottom-box .creator-stories-bottom-text-container .creator-stories-bottom-text p span {
            font-family: CircularBook;
            font-size: 16px;
            letter-spacing: 0;
            font-weight: 300
        }

        .creator-stories-section .creator-stories-bottom-box .creator-stories-bottom-text-container .creator-stories-bottom-text a {
            color: #d2a390;
            cursor: pointer;
        }

        .find-tribe-section {
            display: flex;
            justify-content: center;
            align-items: flex-start
        }

        .find-tribe-section .find-tribe-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-wrap: wrap;
            padding-top: 135px;
            width: 100%;
            max-width: 1350px
        }

        .find-tribe-section .find-tribe-container .find-tribe-title {
            text-align: center;
            font-size: 16px;
            text-transform: uppercase;
            color: #1a1a1a;
            font-family: CircularBold;
            letter-spacing: 3px;
            word-spacing: 3px;
            width: 100%
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container {
            padding-top: 60px;
            width: 100%
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            max-width: 1200px;
            width: 100%;
            padding-left: 40px;
            padding-right: 100px
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-main-left-title {
            padding-bottom: 30px
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-left {
            width: 50%;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            max-width: 525px
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-left .find-tribe-post-left-title p,.find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-left .find-tribe-post-left-title pre,.find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-left .find-tribe-post-left-title pre span,.find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-left .find-tribe-post-left-title p span {
            font-family: CircularMed;
            font-size: 40px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 50px;
            margin: 0
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-left .find-tribe-post-left-text p:first-child {
            padding-top: 30px
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-left .find-tribe-post-left-text p {
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            letter-spacing: 0;
            font-weight: 300;
            margin: 0;
            /* display: flex */
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-left .find-tribe-post-left-text p img {
            max-width: 21px;
            max-height: 12px;
            /* padding-left: 5px */
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-left .find-tribe-post-left-text p span {
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            letter-spacing: 0;
            font-weight: 300;
            margin: 0;
            /* display: flex;
            align-items: center;
            padding-right: 5px; */
            color: #93E0FF !important;
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-left .find-tribe-post-left-text p span img {
            max-width: 21px;
            max-height: 12px;
            /* padding-left: 5px; */
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-left .find-tribe-post-left-text p a {
            cursor: pointer;
            color: #93E0FF !important;
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-left .find-tribe-post-left-text p a img {
            max-width: 21px;
            max-height: 12px;
            /* padding-left: 5px */
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-right {
            width: 50%;
            text-align: right;
            display: flex;
            justify-content: center
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container .find-tribe-main-posts-container .find-tribe-post-container .find-tribe-post-right img {
            max-width: 525px;
            max-height: 320px;
            -o-object-fit: cover;
            object-fit: cover
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container #owl-carousel-digital-talks .owl-stage-outer {
            max-width: 1240px;
            margin: 0 auto;
            z-index: 1;
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container #owl-carousel-digital-talks .owl-stage-outer .owl-stage .owl-item {
            display: flex;
            justify-content: center
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container #owl-carousel-digital-talks .owl-nav {
            display: flex;
            justify-content: space-between;
            position: relative;
            top: -200px;
            margin: 0 25px;
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container #owl-carousel-digital-talks .owl-nav button {
            font-size: 50px
        }

        .find-tribe-section .find-tribe-container .find-tribe-main-container #owl-carousel-digital-talks .owl-dots{
            display: none;
        }

        .mentorship-section {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 60px
        }

        .mentorship-section .mentorship-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            max-width: 1200px
        }

        .mentorship-section .mentorship-container .mentorship-main-container {
            display: flex;
            justify-content: center;
            width: 100%;
            max-width: 1200px
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 100%;
            padding: 0 25px 75px
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-main-left-title {
            padding-bottom: 30px
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            width: 100%
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-left {
            width: 50%;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            max-width: 525px
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-left .mentorship-title-tablet {
            display: none
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-divider {
            max-width: 85px;
            width: 100%;
            padding-left: 30px;
            padding-right: 30px
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right {
            max-width: 430px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right .mentorship-post-right-bottom,.mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right .mentorship-post-right-top {
            /* display: flex; */
            flex-direction: column;
            flex-wrap: wrap
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right hr {
            height: 2px;
            margin-top: 20px;
            margin-bottom: 30px
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right .mentorship-post-right-text {
            text-align: left
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right .mentorship-post-right-text p {
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            letter-spacing: 0;
            font-weight: 300;
            margin: 0;
            display: flex
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right .mentorship-post-right-action {
            padding-top: 20px;
            text-align: left;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right .mentorship-post-right-action .mentor-arrow {
            height: 55px;
            vertical-align: middle;
            display: flex;
            align-items: center;
            transform: rotate(180deg);
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right .mentorship-post-right-action .mentor-arrow button {
            cursor: pointer;
            border: none;
            background: none;
            padding: 0;
            outline: 0;
        }
         
        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right .mentorship-post-right-action .mentor-arrow button img {
            width: 21px;
            height: 12px;
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right .mentorship-post-right-action p {
            font-family: CircularMed;
            font-size: 40px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 50px;
            margin: 0
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right .mentorship-post-right-action p img {
            max-width: 21px;
            max-height: 12px;
            padding-left: 5px
        }

        .mentorship-section .mentorship-container .mentorship-main-container .mentorship-main-posts-container .mentorship-post-container .mentorship-post-right .mentorship-post-right-action p span {
            font-family: CircularMed;
            font-size: 40px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 50px;
            margin: 0
        }

        .experiences-section {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 60px
        }

        .experiences-section .experiences-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            max-width: 1350px
        }

        .experiences-section .experiences-container .experiences-main-container {
            width: 100%
        }

        .experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            max-width: 1200px;
            width: 100%;
            padding-left: 40px;
            padding-right: 100px
        }

        .experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-main-left-title {
            padding-bottom: 30px
        }

        .experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-post-container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%
        }

        .experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-post-container .experiences-post-left {
            width: 50%;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            max-width: 525px
        }

        .experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-post-container .experiences-post-left .experiences-post-left-title p,.experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-post-container .experiences-post-left .experiences-post-left-title pre,.experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-post-container .experiences-post-left .experiences-post-left-title pre span,.experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-post-container .experiences-post-left .experiences-post-left-title p span {
            font-family: CircularMed;
            font-size: 40px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 50px;
            margin: 0
        }

        .experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-post-container .experiences-post-left .experiences-post-left-text p:first-child {
            padding-top: 30px
        }

        .experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-post-container .experiences-post-left .experiences-post-left-text p {
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            letter-spacing: 0;
            font-weight: 300;
            margin: 0;
            /* display: flex */
        }

        .experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-post-container .experiences-post-left .experiences-post-left-text p span {
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            letter-spacing: 0;
            font-weight: 300;
            margin: 0;
            /* display: flex;
            align-items: center;
            padding-right: 5px; */
            color: #93E0FF !important;
        }

        .experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-post-container .experiences-post-left .experiences-post-left-text p a {
            cursor: pointer;
            color: #93E0FF !important;
        }

        .experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-post-container .experiences-post-right {
            width: 50%;
            text-align: right;
            display: flex;
            justify-content: center
        }

        .experiences-section .experiences-container .experiences-main-container .experiences-main-posts-container .experiences-post-container .experiences-post-right img {
            max-width: 525px;
            max-height: 320px;
            -o-object-fit: cover;
            object-fit: cover
        }

        .experiences-section .experiences-container .experiences-main-container #owl-carousel-experiences .owl-stage-outer{
            z-index: 1;
            margin: 0 auto;
            max-width: 1240px;
        }

        .experiences-section .experiences-container .experiences-main-container #owl-carousel-experiences .owl-stage-outer .owl-stage .owl-item {
            display: flex;
            justify-content: center
        }

        .experiences-section .experiences-container .experiences-main-container #owl-carousel-experiences .owl-nav {
            display: flex;
            justify-content: space-between;
            position: relative;
            top: -200px;
            margin: 0 25px;
        }

        .experiences-section .experiences-container .experiences-main-container #owl-carousel-experiences .owl-nav button {
            font-size: 50px
        }

        .experiences-section .experiences-container .experiences-main-container #owl-carousel-experiences .owl-dots{
            display: none;
        }

        .courses-section {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* background-color: #1a1a1a; */
            max-height: 560px;
            /* height: 100%; */
            padding-top: 60px
        }

        .courses-section .courses-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            max-width: 1350px
        }

        .courses-section .courses-container .courses-main-container {
            width: 100%
        }

        .courses-section .courses-container .courses-main-container .courses-main-posts-container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            max-width: 1200px;
            width: 100%;
            padding-left: 40px;
            padding-right: 100px
        }

        .courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-main-left-title {
            color: #1A1A1A;
            padding-bottom: 30px
        }

        .courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-post-container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%
        }

        .courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-post-container .courses-post-left {
            width: 50%;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            max-width: 525px
        }

        .courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-post-container .courses-post-left .courses-post-left-title p,.courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-post-container .courses-post-left .courses-post-left-title pre,.courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-post-container .courses-post-left .courses-post-left-title pre span,.courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-post-container .courses-post-left .courses-post-left-title p span {
            font-family: CircularMed;
            font-size: 40px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 50px;
            margin: 0
        }

        .courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-post-container .courses-post-left .courses-post-left-text p:first-child {
            padding-top: 30px
        }

        .courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-post-container .courses-post-left .courses-post-left-text p {
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            letter-spacing: 0;
            font-weight: 300;
            margin: 0;
            /* display: flex */
        }

        .courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-post-container .courses-post-left .courses-post-left-text p span {
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            letter-spacing: 0;
            font-weight: 300;
            margin: 0;
            /* display: flex;
            align-items: center;
            padding-right: 5px; */
        }

        .courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-post-container .courses-post-left .courses-post-left-text p a {
            cursor: pointer;
            color: #93E0FF !important;
        }

        .courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-post-container .courses-post-right {
            width: 50%;
            text-align: right;
            display: flex;
            justify-content: center
        }

        .courses-section .courses-container .courses-main-container .courses-main-posts-container .courses-post-container .courses-post-right img {
            max-width: 525px;
            max-height: 320px;
            -o-object-fit: cover;
            object-fit: cover
        }

        .courses-section .courses-container .courses-main-container #owl-carousel-courses .owl-stage-outer{
            z-index: 1;
            margin: 0 auto;
            max-width: 1240px;
        }

        .courses-section .courses-container .courses-main-container #owl-carousel-courses .owl-stage-outer .owl-stage .owl-item {
            display: flex;
            justify-content: center
        }

        .courses-section .courses-container .courses-main-container #owl-carousel-courses .owl-nav {
            display: flex;
            justify-content: space-between;
            position: relative;
            top: -200px;
            margin: 0 25px;
        }

        .courses-section .courses-container .courses-main-container #owl-carousel-courses .owl-nav button {
            font-size: 50px
        }

        .courses-section .courses-container .courses-main-container #owl-carousel-courses .owl-dots{
            display: none;
        }

        .podcasts-section {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* background-color: #8f5767; */
            max-height: 560px;
            /* height: 100%; */
            padding-top: 60px
        }

        .podcasts-section .podcasts-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            max-width: 1350px
        }

        .podcasts-section .podcasts-container .podcasts-main-container {
            width: 100%;
            padding-bottom: 22px;
        }

        .podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            max-width: 1200px;
            width: 100%;
            padding-left: 40px;
            padding-right: 100px
        }

        .podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-main-left-title {
            color: #1A1A1A;
            padding-bottom: 30px
        }

        .podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-post-container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%
        }

        .podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-post-container .podcasts-post-left {
            width: 50%;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            max-width: 525px
        }

        .podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-post-container .podcasts-post-left .podcasts-post-left-title p,.podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-post-container .podcasts-post-left .podcasts-post-left-title pre,.podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-post-container .podcasts-post-left .podcasts-post-left-title pre span,.podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-post-container .podcasts-post-left .podcasts-post-left-title p span {
            font-family: CircularMed;
            font-size: 40px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 50px;
            margin: 0
        }

        .podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-post-container .podcasts-post-left .podcasts-post-left-text p:first-child {
            padding-top: 30px
        }

        .podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-post-container .podcasts-post-left .podcasts-post-left-text p {
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            letter-spacing: 0;
            font-weight: 300;
            margin: 0;
            /* display: flex */
        }

        .podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-post-container .podcasts-post-left .podcasts-post-left-text p span {
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            letter-spacing: 0;
            font-weight: 300;
            margin: 0;
            /* display: flex;
            align-items: center;
            padding-right: 5px; */
        }

        .podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-post-container .podcasts-post-left .podcasts-post-left-text p a {
            color: #93E0FF !important;
            cursor: pointer;
        }

        .podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-post-container .podcasts-post-right {
            width: 50%;
            text-align: right;
            display: flex;
            justify-content: center
        }

        .podcasts-section .podcasts-container .podcasts-main-container .podcasts-main-posts-container .podcasts-post-container .podcasts-post-right img {
            max-width: 525px;
            max-height: 320px;
            -o-object-fit: cover;
            object-fit: cover
        }

        .podcasts-section .podcasts-container .podcasts-main-container #owl-carousel-podcasts .owl-stage-outer{
            z-index: 1;
            margin: 0 auto;
            max-width: 1240px;
        }

        .podcasts-section .podcasts-container .podcasts-main-container #owl-carousel-podcasts .owl-stage-outer .owl-stage .owl-item {
            display: flex;
            justify-content: center
        }

        .podcasts-section .podcasts-container .podcasts-main-container #owl-carousel-podcasts .owl-nav {
            display: flex;
            justify-content: space-between;
            position: relative;
            top: -200px;
            margin: 0 25px;
        }

        .podcasts-section .podcasts-container .podcasts-main-container #owl-carousel-podcasts .owl-nav button {
            font-size: 50px
        }

        .podcasts-section .podcasts-container .podcasts-main-container #owl-carousel-podcasts .owl-dots{
            display: none;
        }

        .bottom-section {
            display: flex;
            align-items: flex-start;
            /* height: 274px; */
            background-color: rgba(147,224,255,0.2);
            max-width: unset;
        }

        .bottom-section .bottom-section-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-wrap: wrap;
            padding: 60px 0;
        }

        .bottom-section .bottom-section-container .bottom-section-title {
            text-align: center;
            font-size: 15px;
            text-transform: uppercase;
            color: #1a1a1a;
            font-family: CircularBold;
            letter-spacing: 3px;
            word-spacing: 3px
        }

        .bottom-section .bottom-section-container .bottom-section-text {
            font-family: RockSalt;
            text-align: center;
            color: #1a1a1a;
            font-size: 18px;
            line-height: 40px;
            letter-spacing: 5.63px;
            max-width: 860px
        }

        .bottom-section .bottom-section-container .bottom-section-logo {
            font-family: Schnyder;
            font-size: 60px;
            line-height: 72px;
            color: #1a1a1a;
            padding-top: 40px;
            text-align: center
        }

        .bottom-section .bottom-section-container .bottom-section-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 30px
        }

        .bottom-section .bottom-section-container .bottom-section-button p {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 179px;
            height: 44px;
            border-radius: 30px;
            background: #1a1a1a;
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
            margin: 0;
        }

        .bottom-section .bottom-section-container .bottom-section-button p a {
            color: #fff;
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px
        }

        .internal-page {
            padding-top: 100px;
            padding-bottom: 113px;
            flex-direction: column;
        }

        .internal-page .page-title {
            font-family: Schnyder;
            /* font-size: 40px; */
            line-height: 50px;    
            color: #1A1A1A;   
            padding-bottom: 100px;     
            max-width: 630px;
            text-align: center;
        }

        .internal-page .page{
            max-width: 857px;
            width: 100%;
        }

        .internal-page .page h1{
            font-family: CircularMed;
            font-size: 32px;
            line-height: 40px;
            margin-top: 0px;
        }

        .internal-page .page p{
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
        }

        .internal-page .page div{
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
        }

        .internal-page .page span{
            font-family: CircularBook;
            font-size: 16px;
            line-height: 22px;
        }

        .internal-page .page hr{
            margin-top: 60px;
            margin-bottom: 60px;
        }
    </style>

    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.min.css"></noscript>
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/max-width-1440.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/max-width-1440.min.css"></noscript>
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/max-width-1280.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/max-width-1280.min.css"></noscript>
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/max-width-1024.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/max-width-1024.min.css"></noscript>
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/max-width-768.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/max-width-768.min.css"></noscript>
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/max-width-414.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/max-width-414.min.css"></noscript>
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/max-width-375.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/max-width-375.min.css"></noscript>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148228570-4"></script>
	<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-148228570-4');
    </script>
    <!-- End Global site tag (gtag.js) - Google Analytics -->
    <!-- wrapper -->
    <div class="wrapper">
        <!-- MODAL LOGIN -->
        <div class="modal modal-login">
            <div class="modal-overlay modal-toggle-login"></div>
            <div class="modal-wrapper modal-transition">
                <div class="modal-header">
                    <button class="modal-close modal-toggle-login" aria-label="Close Modal">
                        <a class="icon-close icon no-paywall" href="#icon-close" id="btnCloseLoginModal">
                            <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-close.svg" class="lazyload" alt="Close Modal" />
                        </a>
                    </button>                
                </div>
            
                <div class="modal-body">
                    <div class="modal-content">
                        <div class="modal-user-login-container form-wrapper" id="loginFormContainer">
                            <?php                    
                                get_template_part('user-login');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL LOGIN -->

        <!-- MODAL REGISTRATION -->
        <div class="modal modal-user">
            <div class="modal-overlay modal-toggle"></div>
            <div class="modal-wrapper modal-transition">
                <div class="modal-header">
                    <button class="modal-close modal-toggle" aria-label="Close Modal">
                        <a class="icon-close icon no-paywall" id="btnCloseModal">
                            <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-close.svg" class="lazyload" alt="Close Modal" />
                        </a>
                    </button>                
                </div>
            
                <div class="modal-body">
                    <div class="modal-content">
                        <div class="modal-user-registration-container" id="registrationFormContainer">
                            <?php
                                get_template_part('user-registration');
                            ?>
                        </div>
                        
                        <div class="modal-success-registration-container" id="successRegistration" style="display: none;">
                            <?php
                                get_template_part('success-registration');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL REGISTRATION -->

        <!-- MODAL FORGOT PASSWORD -->
        <div class="modal modal-forgot-password">
            <div class="modal-overlay modal-toggle-forgot-password"></div>
            <div class="modal-wrapper modal-transition">
                <div class="modal-header">
                    <button class="modal-close modal-toggle-forgot-password" aria-label="Close Modal">
                        <a class="icon-close icon no-paywall" id="btnCloseForgotPasswordModal">
                            <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-close.svg" class="lazyload" alt="Close Modal" />
                        </a>
                    </button>                
                </div>
            
                <div class="modal-body">
                    <div class="modal-content">
                        <div class="modal-user-login-container form-wrapper" id="forgotPasswordFormContainer">
                            <?php                    
                                get_template_part('user-forgot-password');
                            ?>
                        </div>

                        <?php
                            if ( isset($_GET["emailsent"]) ){
                                $emailsent = $_GET["emailsent"];

                                if($emailsent == true ) {
                        ?>
                                    <div class="modal-success-registration-container" id="successEmailSent">
                                        <?php
                                            get_template_part('success-email-sent');
                                        ?>
                                    </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL FORGOT PASSWORD -->

        <!-- MODAL RESET PASSWORD -->
        <div class="modal modal-reset-password">
            <div class="modal-overlay modal-toggle-reset-password"></div>
            <div class="modal-wrapper modal-transition">
                <div class="modal-header">
                    <button class="modal-close modal-toggle-reset-password" aria-label="Close Modal">
                        <a class="icon-close icon no-paywall" id="btnCloseResetPasswordModal">
                            <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-close.svg" class="lazyload" alt="Close Modal" />
                        </a>
                    </button>                
                </div>
            
                <div class="modal-body">
                    <div class="modal-content">
                        <div class="modal-user-reset-password-container form-wrapper" id="resetPasswordFormContainer">
                            <?php                    
                                get_template_part('user-reset-password');
                            ?>
                        </div>

                        <?php
                            if ( isset($_GET["password"]) ){
                                $passwordchanged = $_GET["password"];

                                if($passwordchanged == "changed" ) {
                        ?>
                                    <div class="modal-success-password-changed-container" id="successPasswordChanged">
                                        <?php
                                            get_template_part('success-password-changed');
                                        ?>
                                    </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL RESET PASSWORD -->

        <div class="sticky-navbar" id="stickyNav">
            <a href="/" class="header-logo-link no-paywall">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/GCC_Logo-Short.svg" class="header-logo" alt="Global Creator's Community" />
            </a>
            <?php
                global $wpdb, $user_ID;  

                if (!$user_ID) {  
                    //All code goes in here.                        
            ?>
                    <div class="user-login-container" id="stickyHeaderSignIn">
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
                            <button id="toggleSignInStickyBtn" class="dropbtn" aria-label="Open Dropdown">
                                <!-- <a href="#"> -->
                                <span class="sign-in-user small-text">
                                    <?php
                                        $current_user = wp_get_current_user();
                                        printf( __( '%s', 'textdomain' ), esc_html( $current_user->user_firstname ) );
                                    ?>
                                </span>    
                                <!-- </a> -->
                            </button>
                            <a id="myStickyDropdown" class="dropdown-content" href="<?php echo wp_logout_url( home_url() ); ?>">
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
        </div>        