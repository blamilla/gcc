(function ($, root, undefined) {
	"use strict";

	var months = [
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December'
	]

	$(window).on('load', function() {
		$(".loader").hide();
		$("#slider-bg-line").show();
		$("#owl-carousel-top").show();	
		
		$("#owl-carousel-top").owlCarousel({
			items: 9,
			loop: true,
			margin: 25,
			autoWidth: true,
			autoplay: true,
			slideTransition: 'linear',
			autoplaySpeed: 6000,
			smartSpeed: 6000,
			stopOnHover: true,
			lazyLoad:true
		}).trigger('play.owl.autoplay');	

		var data = {
			action: 'is_user_logged_in'
		};
		
		$.post(ajaxurl, data, function(response) {
			if(response == 'no') {
				$('a').each(function() {
					if(!$(this).hasClass('no-paywall') && !$(this).parents('.footer-second-column').length > 0 && !$(this).parents('.footer-third-column').length > 0 && !$(this).parents('.bottom-section-button').length > 0){
						$(this).removeAttr('target');
						$(this).removeAttr('href');
					}
				});
			}
		});				
	});

	$(document).ready(function () {
		$("#owl-carousel-blog-posts").owlCarousel({
			items : 1,
			loop: true,
			pagination: false,
			lazyLoad: true,
			nav: true,
			navText : ["<img src='/wp-content/themes/gcc/img/icons/icon-arrow-back.svg' />","<img style='transform: rotate(180deg)' src='/wp-content/themes/gcc/img/icons/icon-arrow-back.svg' />"]
		});

		$("#owl-carousel-digital-talks").owlCarousel({
			items : 1,
			loop: true,
			pagination: false,
			lazyLoad: true,
			nav: true,
			navText : ["<img src='/wp-content/themes/gcc/img/icons/icon-arrow-back.svg' />","<img style='transform: rotate(180deg)' src='/wp-content/themes/gcc/img/icons/icon-arrow-back.svg' />"]
		});

		$("#owl-carousel-experiences").owlCarousel({
			items : 1,
			loop: true,
			pagination: false,
			lazyLoad: true,
			nav: true,
			navText : ["<img src='/wp-content/themes/gcc/img/icons/icon-arrow-back.svg' />","<img style='transform: rotate(180deg)' src='/wp-content/themes/gcc/img/icons/icon-arrow-back.svg' />"]
		});

		$("#owl-carousel-courses").owlCarousel({
			items : 1,
			loop: true,
			pagination: false,
			lazyLoad: true,
			nav: true,
			navText : ["<img src='/wp-content/themes/gcc/img/icons/icon-arrow-back.svg' />","<img style='transform: rotate(180deg)' src='/wp-content/themes/gcc/img/icons/icon-arrow-back.svg' />"]
		});

		$("#owl-carousel-podcasts").owlCarousel({
			items : 1,
			loop: true,
			pagination: false,
			lazyLoad: true,
			nav: true,
			navText : ["<img src='/wp-content/themes/gcc/img/icons/icon-arrow-back.svg' />","<img style='transform: rotate(180deg)' src='/wp-content/themes/gcc/img/icons/icon-arrow-back.svg' />"]
		});

		// 404 Error Page
		if($('body').hasClass('error404')){
			$(".header-section").hide();
			$(".wrapper").css("height", "100%");
		}
		// End 404 Error Page

		// FORGOT PASSWORD
		$('#forgotPasswordForm input').on('keypress', function(e) {
			return e.which !== 13;
		});

		$("#resetLinkBtn").on("click", function(e){			
			if($("#user_login").val() == '') {
				$("#resetEmailErrorMsgContainer").show();
				$("#resetEmailErrorMsg").html("Please enter your username. Hint: it's your email");
				return false;
			}
			else{
				var action = 'check_email_reset_exists';

				var ajaxdata = {
					action: action,
					emailResetAddress: $("#user_login").val()
				};

				$("#loaderResetEmail").show();

				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: ajaxurl,
					data: ajaxdata,
					success: function(data){
						$("#loaderResetEmail").hide();
						$("#resetEmailErrorMsgContainer").hide();
						$("#resetEmailErrorMsg").html('');
					},
					error: function(msg){
						if(msg.responseText == "Error0"){
							$("#loaderResetEmail").hide();
							$("#resetEmailErrorMsgContainer").show();
							$("#resetEmailErrorMsg").html('There is no account with that username or email address.');
							return false;
						}
						else{
							$("#loaderResetEmail").hide();
							$("#resetEmailErrorMsgContainer").hide();
							$("#resetEmailErrorMsg").html('');
							$("#forgotPasswordForm").submit();
						}
					}
				});
			}
		});

		if (window.location.href.indexOf("emailsent=true") > -1) {
			$('.modal-forgot-password').toggleClass('is-visible-forgot-password');
			$('#forgotPasswordFormContainer').hide();
			$('.modal-forgot-password .modal-wrapper').css('top', '10em');			
		}		

		$('#successEmailSentBtn').on('click',function(){
			$(".modal-forgot-password").hide();
			window.history.pushState('/?emailsent=true', 'Global Creators Community', '/');
			//window.location.reload();
		});

		if (window.location.href.indexOf("password=changed") > -1) {
			$('.modal-reset-password').toggleClass('is-visible-forgot-password');
			$('#resetPasswordFormContainer').hide();
			$('.modal-reset-password .modal-wrapper').css('top', '10em');			
		}

		$('#successPasswordChangedBtn').on('click',function(){
			$(".modal-reset-password").hide();
			window.history.pushState('/?password=changed', 'Global Creators Community', '/');
			$(".modal-login").show();
			$(".modal-login").addClass('is-visible-modal-login');
			//window.location.reload();
		});

		$("#btnCloseForgotPasswordModal").on('click', function(){
			$(".modal-forgot-password").hide();
			window.history.pushState('/?emailsent=true', 'Global Creators Community', '/');
		});

		$("#btnCloseResetPasswordModal").on('click', function(){
			$(".modal-reset-password").hide();
			window.history.pushState('/?password=changed', 'Global Creators Community', '/');
		});
		// END FORGOT PASSWORD

		// RESET PASSWORD

		/* PASSWORD VALIDATION */
		if (window.location.href.indexOf("key") > -1 && window.location.href.indexOf("login") > -1) {
			$('.modal-reset-password').toggleClass('is-visible-reset-password');
			$('.modal-reset-password .modal-wrapper').css('top', '3em');			
		}

		var hasErrorResetPass, hasErrorConfirmResetPass = true;

		$("#pass1").focusout(function(){
			var passwordReg = /^([a-zA-Z0-9@*#]{8,16})$/;
			var passwordVal = $("#pass1").val();
			
			if(passwordVal == '') {
				$("#resetPass1ErrorMsgContainer").show();
				$("#resetPass1ErrorMsg").html('Please enter your new password.');
				hasErrorResetPass = true;
			}
			else if(!passwordReg.test(passwordVal)) {
				$("#resetPass1ErrorMsgContainer").show();
				$("#resetPass1ErrorMsg").html('Passwords need to have 8 to 16 characters. Double check?');
				hasErrorResetPass = true;
			}
			else{
				$("#resetPass1ErrorMsgContainer").hide();
				$("#resetPass1ErrorMsg").html('');
				hasErrorResetPass = false;
			}

			if(!hasErrorResetPass && !hasErrorConfirmResetPass)
				$("#resetBtn").prop("disabled", false);
			else
				$("#resetBtn").prop("disabled", true);

			return hasErrorResetPass;
		});	

		$("#pass2").focusout(function(){
			if($(this).val() != $("#pass1").val()) {
				$("#resetPass2ErrorMsgContainer").show();
				$("#resetPass2ErrorMsg").html('Passwords do not match.');
				hasErrorConfirmResetPass = true;
			}
			else {
				$("#resetPass2ErrorMsgContainer").hide();
				$("#resetPass2ErrorMsg").html('');
				hasErrorConfirmResetPass = false;
			}

			if(!hasErrorResetPass && !hasErrorConfirmResetPass)
				$("#resetBtn").prop("disabled", false);
			else
				$("#resetBtn").prop("disabled", true);

			return hasErrorConfirmResetPass;
		});

		$("#resetBtn").on("click", function(){
			if($("#pass1").val() == '') {
				$("#resetPass1ErrorMsgContainer").show();
				$("#resetPass1ErrorMsg").html('Please enter your new password.');	
				$("#resetBtn").prop("disabled", true);			
			}
			else if($("#pass1").val() != $("#pass2").val()){
				$("#resetPass2ErrorMsgContainer").show();
				$("#resetPass2ErrorMsg").html('Passwords do not match.');
			}
			else{
				$("#resetPass1ErrorMsgContainer").hide();
				$("#resetPass1ErrorMsg").html('');
				$("#resetPass2ErrorMsgContainer").hide();
				$("#resetPass2ErrorMsg").html('');
				$("#resetBtn").prop("disabled", false);	
				$("#resetPasswordForm").submit();
			}
		});
		/* END PASSWORD VALIDATION */
		// END RESET PASSWORD

		//$(window).on('load', function() {				

		/* SIGN IN - SIGN OUT MENU */
		$("#headerSignIn").click(function(e) {
			//$(".modal-login").show();
			// e.preventDefault();
			$('.modal-login').toggleClass('is-visible-modal-login');			
			$('.modal-user').removeClass('is-visible');
		});		

		$("#stickyHeaderSignIn").on("click", function(e) {
			//$(".modal-login").show();
			// e.preventDefault();
			$('.modal-login').toggleClass('is-visible-modal-login');
			$('.modal-login').addClass('is-visible-centered');
			$('.modal-user').removeClass('is-visible');
		});			

		$('.modal-toggle-login').on('click', function(e) {
			e.preventDefault();
			$('.modal-login').toggleClass('is-visible-modal-login');
		});

		$('[id="toggleSignInBtn"]').on("click", function(){
			$('[id="myDropdown"]').toggleClass("show");
		});

		$('[id="toggleSignInStickyBtn"]').on("click", function(){
			$('[id="myStickyDropdown"]').toggleClass("show");
		});

		$(window).click(function(e) {
			if (!$(event.target).hasClass('dropbtn')) {
				if($(".dropdown-content").hasClass('show')){
					$(".dropdown-content").removeClass('show');
				}
			}
		});
		/* END SIGN IN - SIGN OUT MENU */

		/* LOGIN FORM */
		/* EMPTY FIELDS VALIDATION */
		$("#signInSubmitBtn").on("click", function(){
			if($("#username").val() == '') {
				$("#usernameErrorMsgContainer").show();
				$("#usernameErrorMsg").html('Please enter your username.');
				return false;
			}
			else{
				$("#usernameErrorMsgContainer").hide();
				$("#usernameErrorMsg").html('');
			}

			if($("#loginPassword").val() == '') {
				$("#loginPasswordErrorMsgContainer").show();
				$("#loginPasswordErrorMsg").html('Please enter your password.');
				return false;
			}
			else{
				$("#loginPasswordErrorMsgContainer").hide();
				$("#loginPasswordErrorMsg").html('');
			}
		});

		$("#username").focusout(function(){			
			if($("#username").val() == '') {
				$("#usernameErrorMsgContainer").show();
				$("#usernameErrorMsg").html('Please enter your username.');
				return false;
			}
			else{
				$("#usernameErrorMsgContainer").hide();
				$("#usernameErrorMsg").html('');
			}
		});

		$("#loginPassword").focusout(function(){			
			if($("#loginPassword").val() == '') {
				$("#loginPasswordErrorMsgContainer").show();
				$("#loginPasswordErrorMsg").html('Please enter your password.');
				return false;
			}
			else{
				$("#loginPasswordErrorMsgContainer").hide();
				$("#loginPasswordErrorMsg").html('');
			}
		});
		/* END EMPTY FIELDS VALIDATION */
		/* END LOGIN FORM */

		/* SIGN UP FORM */
		$("#btnCloseModal").on('click', function(){
			$("#firstStepForm").show();
			$("#secondStepForm").hide();	

			if($("#usertype-select .custom-options .custom-option").hasClass('selected'))
				$("#usertype-select .custom-options .custom-option").removeClass('selected');
		});

		$("#loginBtn").on('click', function(){
			$(".modal-login").addClass('is-visible-modal-login');
			$(".modal-login").addClass('is-visible-centered');
			// $(".modal-login").addClass('is-visible-centered')
			$(".modal-user").removeClass('is-visible');
		});

		$("#signUpBtn").on('click', function(){
			$(".modal-login").removeClass('is-visible-modal-login');
			$(".modal-user").addClass('is-visible');
			$(".modal-user").addClass('is-visible-centered');

			$("#comesfrom").val('header');
		});		

		$("#forgotPasswordBtn").on('click', function(){
			$(".modal-forgot-password").removeAttr("style");
			$(".modal-forgot-password").addClass('is-visible-forgot-password');
			$(".modal-forgot-password .modal-wrapper").css("top", "3em");
			$("#successEmailSent").hide();
			$("#successPasswordChanged").hide();
			$("#forgotPasswordFormContainer").show();
			$(".modal-login").removeClass('is-visible-modal-login');
			$(".modal-user").removeClass('is-visible');
		});

		/* STEP #1 */

		/* SIGN UP FORM VALIDATIONS */
		var hasErrorFirstname, hasErrorLastname, hasErrorEmail, hasErrorPassword, hasErrorConfirmPassword = true;

		/* FIRST NAME VALIDATION */
		$("#firstname").focusout(function(e){
			// var firstnameReg = /^[a-zA-Z'-]+$/;
			var firstnameVal = $("#firstname").val();
			
			if (e.which == 32)
            	return false;

			if(firstnameVal == '') {
				$("#firstnameErrorMsgContainer").show();
				$("#firstnameErrorMsg").html('Please enter your first name.');
				hasErrorFirstname = true;
			}
			// else if(!firstnameReg.test(firstnameVal)) {
			// 	$("#firstnameErrorMsgContainer").show();
			// 	$("#firstnameErrorMsg").html('This doesn’t seem to be a valid name. Check spelling?');
			// 	hasErrorFirstname = true;
			// }
			else{
				$("#firstnameErrorMsgContainer").hide();
				$("#firstnameErrorMsg").html('');
				hasErrorFirstname = false;
			}
	
			if(!hasErrorFirstname && !hasErrorLastname && !hasErrorEmail && !hasErrorPassword && !hasErrorConfirmPassword)
				$("#goToStepTwoBtn").prop("disabled", false);
			else
				$("#goToStepTwoBtn").prop("disabled", true);
			
			return hasErrorFirstname;

		});	
		/* END FIRST NAME VALIDATION */

		/* LASTNAME VALIDATION */
		$("#lastname").focusout(function(e){
			// var lastnameReg = /^[a-zA-Z'-]+$/;
			var lastnameVal = $("#lastname").val();

			if (e.which == 32)
            	return false;
			
			if(lastnameVal == '') {
				$("#lastnameErrorMsgContainer").show();
				$("#lastnameErrorMsg").html('Please enter your last name.');
				hasErrorLastname = true;
			}
			// else if(!lastnameReg.test(lastnameVal)) {
			// 	$("#lastnameErrorMsgContainer").show();
			// 	$("#lastnameErrorMsg").html('This doesn’t seem to be a valid lastname. Check spelling?');
			// 	hasErrorLastname = true;
			// }
			else{
				$("#lastnameErrorMsgContainer").hide();
				$("#lastnameErrorMsg").html('');
				hasErrorLastname = false;
			}
	
			if(!hasErrorLastname && !hasErrorFirstname && !hasErrorEmail && !hasErrorPassword && !hasErrorConfirmPassword)
				$("#goToStepTwoBtn").prop("disabled", false);
			else
				$("#goToStepTwoBtn").prop("disabled", true);

			return hasErrorLastname;
		});	
		/* END LASTNAME VALIDATION */		

		/* EMAIL VALIDATION */
		$("#email").focusout(function(){
			var emailReg = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
			var emailVal = $("#email").val();
			
			if(emailVal == '') {
				$("#emailErrorMsgContainer").show();
				$("#emailErrorMsg").html('Please enter your email address.');
				$("#goToStepTwoBtn").prop("disabled", true);
				hasErrorEmail = true;
			}
			else if(!emailReg.test(emailVal)) {
				$("#emailErrorMsgContainer").show();
				$("#emailErrorMsg").html('This doesn’t seem to be a valid email. Check spelling?');
				$("#goToStepTwoBtn").prop("disabled", true);
				hasErrorEmail = true;
			}
			else{
				var action = 'check_email_exists';

				var ajaxdata = {
					action: action,
					emailAddress: emailVal
				};

				// console.log(ajaxdata);

				$("#loaderEmail").show();

				$.ajax({
					// url: ajax_object.ajaxurl,
					type: 'POST',
					dataType: 'json',
					url: ajax_login_object.ajaxurl,
					data: ajaxdata,
					success: function(data){
						$("#loaderEmail").hide();
						$("#emailErrorMsgContainer").hide();
						$("#emailErrorMsg").html('');
						hasErrorEmail = false;
					},
					error: function(msg){
						// console.log(ajaxdata);
						if(msg.responseText == "Error0"){
							$("#loaderEmail").hide();
							$("#emailErrorMsgContainer").show();
							$("#emailErrorMsg").html('Sorry! This email is already taken. Try a different one.');
							$("#goToStepTwoBtn").prop("disabled", true);
							hasErrorEmail = true;
						}
						else{
							$("#loaderEmail").hide();
							$("#emailErrorMsgContainer").hide();
							$("#emailErrorMsg").html('');
							hasErrorEmail = false;
						}
					}
				});
			}
	
			if($("#email").val() != '' && $("#firstname").val() != '' && $("#lastname").val() != '' && $("#user-password").val() != '' && $("#confirm-password").val() != '') 
				$("#goToStepTwoBtn").prop("disabled", false);
			else
				$("#goToStepTwoBtn").prop("disabled", true);
			
			// if(!hasErrorEmail && !hasErrorFirstname && !hasErrorLastname && !hasErrorPassword && !hasErrorConfirmPassword) {
			// 	if($("#email").val() != '' && $("#firstname").val() != '' && $("#lastname").val() != '' && $("#user-password").val() != '' && $("#confirm-password").val() != '')
			// 		$("#goToStepTwoBtn").prop("disabled", false);
			// }
			// else
			// 	$("#goToStepTwoBtn").prop("disabled", true);

			return hasErrorEmail;
		});	
		/* END EMAIL VALIDATION */

		/* PASSWORD VALIDATION */
		$("#user-password").focusout(function(){
			var passwordReg = /^([a-zA-Z0-9@*#!-]{8,16})$/;
			var passwordVal = $("#user-password").val();
			
			if(passwordVal == '') {
				$("#passwordErrorMsgContainer").show();
				$("#passwordErrorMsg").html('Please enter your password.');
				hasErrorPassword = true;
			}
			else if(!passwordReg.test(passwordVal)) {
				$("#passwordErrorMsgContainer").show();
				$("#passwordErrorMsg").html('Passwords need to have 8 to 16 characters. Double check?');
				hasErrorPassword = true;
			}
			else if($("#confirm-password").val() != '') {
				if ($("#user-password").val() != $("#confirm-password").val()) {
					$("#passwordErrorMsgContainer").show();
					$("#passwordErrorMsg").html("Hmm. These don’t seem to match. Try again!");
					hasErrorPassword = true;
				} else{
					$("#passwordErrorMsgContainer").hide();
					$("#passwordErrorMsg").html("");

					$("#confirmPasswordErrorMsgContainer").hide();
					$("#confirmPasswordErrorMsg").html("");

					hasErrorPassword = false;
					hasErrorConfirmPassword = false;
				}
			}
			else{
				$("#passwordErrorMsgContainer").hide();
				$("#passwordErrorMsg").html('');
				hasErrorPassword = false;
			}
	
			if(!hasErrorPassword && !hasErrorFirstname && !hasErrorLastname && !hasErrorEmail && !hasErrorConfirmPassword)
				$("#goToStepTwoBtn").prop("disabled", false);
			else
				$("#goToStepTwoBtn").prop("disabled", true);

			return hasErrorPassword;
		});	

		$('#user-password').on('input', function() {
			// do something
			if($("#confirm-password").val() != '') {
				if ($("#user-password").val() != $("#confirm-password").val())
					$("#goToStepTwoBtn").prop("disabled", true);
				else
					$("#goToStepTwoBtn").prop("disabled", false);
			}
		});
		/* END PASSWORD VALIDATION */

		/* CONFIRM PASSWORD */
		$("#confirm-password").focusout(function(){
			if ($("#user-password").val() != $("#confirm-password").val()) {
				$("#confirmPasswordErrorMsgContainer").show();
				$("#confirmPasswordErrorMsg").html("Hmm. These don’t seem to match. Try again!");
				hasErrorConfirmPassword = true;
			} else{
				$("#passwordErrorMsgContainer").hide();
				$("#passwordErrorMsg").html("");

				$("#confirmPasswordErrorMsgContainer").hide();
				$("#confirmPasswordErrorMsg").html("");

				hasErrorPassword = false;
				hasErrorConfirmPassword = false;
			}

			if(!hasErrorConfirmPassword && !hasErrorFirstname && !hasErrorLastname && !hasErrorEmail && !hasErrorPassword)
				$("#goToStepTwoBtn").prop("disabled", false);
			else
				$("#goToStepTwoBtn").prop("disabled", true);

			return hasErrorConfirmPassword;
		});

		$('#confirm-password').on('input', function() {
			// do something
			if ($("#user-password").val() != $("#confirm-password").val())
				$("#goToStepTwoBtn").prop("disabled", true);
			else
				$("#goToStepTwoBtn").prop("disabled", false);
		});
		/* END CONFIRM PASSWORD VALIDATION */

		/* END STEP #1 */

		/* END SIGN UP FORM VALIDATIONS */

		$("#goToStepTwoBtn").on('click', function(){
			$("#firstStepForm").hide();
			$('html, body').animate({ scrollTop: 0 }, 'slow');
			$(".custom-options-industry").css("display", "none");
			$('#secondStepForm').show();
			
			var selectedUsertypeValue = $("#type-user-select .custom-options").find(".selected").attr('data-value');

			if(typeof selectedUsertypeValue != 'undefined') {
				if($("#usertype-select .custom-options .custom-option").attr('data-value') != selectedUsertypeValue)
					$("#usertype-select .custom-options .custom-option").removeClass('selected');

				$("#usertype-select .custom-options .custom-option[data-value='" + selectedUsertypeValue + "']").addClass('selected');
				$('#usertype-select .custom-select__trigger span').text($("#usertype-select .custom-options .custom-option[data-value='" + selectedUsertypeValue + "']").text());
			}
			else{
				$("#usertype-select .custom-options .custom-option[data-value='aspiring-influencer']").addClass('selected');
				$('#usertype-select .custom-select__trigger span').text($("#usertype-select .custom-options .custom-option[data-value='aspiring-influencer']").text());
			}
			// $("#usertype").val($(".custom-options").find(".selected").attr('data-value')).trigger("chosen:updated");
			// $("#usertype option[value='" + $("#dropdown-user").find(":selected").val() + "']").attr("selected", "selected");
		});
		
		$("#userhandle").on('keypress', function(){
			if($('#userhandle').val() == '')
				$('#userhandle').val("@" + $(this).val());
		});

		// Perform AJAX login on form submit
		$('form#loginForm').on('submit', function(e){
			//$('form#loginForm p.status').show().text(ajax_login_object.loadingmessage);
			$("#loaderLogin").show();

			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: ajax_login_object.ajaxurl,
				data: { 
					'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
					'username': $('form#loginForm #username').val(), 
					'password': $('form#loginForm #loginPassword').val(), 
					'security': $('form#loginForm #security').val() },
				success: function(data){
					console.log(data);
					//$('form#loginForm p.status').text(data.message);
					if (data.loggedin == true){						
						document.location.href = ajax_login_object.redirecturl;
						$("#loaderLogin").hide();
					}
					else{
						$("#loaderLogin").hide();
						$("#loginErrorMsgContainer").show();
						$("#loginErrorMsg").html(data.message);
					}
				}
			});
			e.preventDefault();
		});		

		$('.modal-toggle').on('click', function(e) {
			e.preventDefault();
			$('.modal-user').toggleClass('is-visible');
			$('.modal-user').addClass('is-visible-centered');

			$("#comesfrom").val('header');
		});

		$('.modal-toggle-coming-soon').on('click', function(e) {
			e.preventDefault();
			$('.modal-coming-soon').toggleClass('is-visible-coming-soon');
		});		

		/* FIND MENTOR FORM */

		/**
		 * FIND MENTOR EXISTING RECORD
		 */
		var fmDate = $("#findMentorDate").text().trim();
		var fmTime = $("#findMentorTime").text().trim();
		var fmFullDate = new Date(fmDate + " " + fmTime + " GMT");

		// Set Find Mentor existing record Date
		var fmMonthIndex = fmFullDate.getMonth();
		var fmMonthName = months[fmMonthIndex];				

		var fmNewDate = fmMonthName + " " + fmFullDate.getDate() + ", " + fmFullDate.getFullYear();
		
		$("#findMentorDate").text(fmNewDate);
		// End Set Find Mentor existing record Date

		// Set Find Mentor existing record Time
		var fmHours = fmFullDate.getHours();
		var fmMinutes = fmFullDate.getMinutes();

		var fmAmOrPm = fmHours >= 12 ? 'pm' : 'am';
		fmHours = (fmHours % 12) || 12;
		
		var fmNewTime = fmHours + ":" + fmMinutes + "" + fmAmOrPm; 
		
		$("#findMentorTime").text(fmNewTime);
		// End Set Find Mentor existing record Time
		/**
		  * END FIND MENTOR EXISTING RECORD
		*/		

		$('[id="signUpFMBtn"]').on('click', function(){
			$(".modal-mentorship").removeClass('is-visible-modal-mentorship');
			$(".modal-login").removeClass('is-visible-modal-login');
			$(".modal-user").addClass('is-visible');
			$(".modal-user").addClass('is-visible-centered');
			$('.modal-user .modal-wrapper').addClass('modal-opened-content');

			$("#comesfrom").val('findmentor');
		});				

		$("#forgotPasswordFMBtn").on('click', function(){
			$(".modal-forgot-password").removeAttr("style");
			$(".modal-forgot-password").addClass('is-visible-forgot-password');
			$(".modal-forgot-password").addClass('is-visible-centered');
			$("#successEmailSent").hide();
			$("#successPasswordChanged").hide();
			$("#forgotPasswordFormContainer").show();
			$(".modal-login").removeClass('is-visible-modal-login');
			$(".modal-user").removeClass('is-visible');
			$(".modal-mentorship").removeClass('is-visible-modal-mentorship');			
		});

		// Perform AJAX login on form submit
		$('form#loginFormFM').on('submit', function(e){
			//$('form#loginForm p.status').show().text(ajax_login_object.loadingmessage);
			$("#loaderLoginFindMentor").show();

			if($("#usernameFM").val() == '') {
				$("#usernameFMErrorMsgContainer").show();
				$("#usernameFMErrorMsg").html('Please enter your username.');
				$("#loaderLoginFindMentor").hide();	
				return false;
			}
			else{
				$("#usernameFMErrorMsgContainer").hide();
				$("#usernameFMErrorMsg").html('');
			}

			if($("#loginPasswordFM").val() == '') {
				$("#loginFMErrorMsgContainer").show();
				$("#loginFMErrorMsg").html('Please enter your password.');
				$("#loaderLoginFindMentor").hide();	
				return false;
			}
			else{
				$("#loginFMErrorMsgContainer").hide();
				$("#loginFMErrorMsg").html('');
			}

			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: ajax_login_object.ajaxurl,
				data: { 
					'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
					'username': $('form#loginFormFM #usernameFM').val(), 
					'password': $('form#loginFormFM #loginPasswordFM').val(), 
					'security': $('form#loginFormFM #security').val() },
				success: function(data){
					//$('form#loginForm p.status').text(data.message);
					if (data.loggedin == true){						
						document.location.href = ajax_login_object.redirecturl + "/?fmredirect=true";
						$("#loaderLoginFindMentor").hide();										
					}
					else{
						$("#loaderLoginFindMentor").hide();
						$("#loginFMErrorMsgContainer").show();
						$("#loginFMErrorMsg").html(data.message);
					}
				}
			});
			e.preventDefault();
		});

		// SHOWS FIND MENTOR MODAL AFTER LOGIN
		if (window.location.href.indexOf("fmredirect=true") > -1) {			
			$("#beMentorTab").css('opacity', '0.4');
			$("#findMentorTab").css('opacity', '1');
			$(".find-mentor-container").show();
			$(".be-mentor-container").hide();

			if($("#existsFindMentorRecord").is(":visible")){
				$('.modal-mentorship').removeClass('modal-opened');
				$('.modal-mentorship .modal-wrapper').removeClass('modal-opened-content');
			}
			else{
				$('.modal-mentorship').addClass('modal-opened');
				$('.modal-mentorship .modal-wrapper').addClass('modal-opened-content');
			}
		}

		// TABS FUNCTIONALITY
		$("#findMentorTab").on('click', function(){
			$("#beMentorTab").css('opacity', '0.4');
			$("#findMentorTab").css('opacity', '1');
			$(".find-mentor-container").show();
			$(".be-mentor-container").hide();

			if($("#existsFindMentorRecord").is(":visible")){
				$('.modal-mentorship').removeClass('modal-opened');
				$('.modal-mentorship .modal-wrapper').removeClass('modal-opened-content');
				$('.modal-mentorship .modal-wrapper').css('height', 'auto');				
			}
			else{
				$('.modal-mentorship').addClass('is-visible-centered');				
			}
		});

		$("#beMentorTab").on('click', function(){						
			$("#findMentorTab").css('opacity', '0.4');
			$("#beMentorTab").css('opacity', '1');
			$(".be-mentor-container").show();
			$(".find-mentor-container").hide();			

			if($("#existsBeMentorRecord").is(":visible")){
				$('.modal-mentorship').removeClass('modal-opened');
				$('.modal-mentorship .modal-wrapper').removeClass('modal-opened-content');
				$('.modal-mentorship .modal-wrapper').css('height', 'auto');
			}
			else{
				$('.modal-mentorship').addClass('is-visible-centered');
			}
		});
		// END TABS FUNCTIONALITY		

		// OPEN THE FIND MENTOR MODAL
		$("#btnFindMentor").on('click', function(){
			$("#beMentorTab").css('opacity', '0.4');
			$("#findMentorTab").css('opacity', '1');
			$('.modal-mentorship').show();	
			$(".login-find-mentor").show();
			$(".login-be-mentor").hide();
			$(".find-mentor-container").show();
			$(".be-mentor-container").hide();			
			$("#loginFormFM").removeAttr('style');			
			
			if(!$("#existsFindMentorRecord").is(":visible")){
				$("#firstStepFindMentorForm").show();
				$("#secondStepFindMentorForm").hide();
				$('.modal-mentorship').addClass('is-visible-centered');
			}
			else {
				$('.modal-mentorship .modal-wrapper').css("height", "auto");
				$('.modal-mentorship').removeClass('modal-opened');
				$('.modal-mentorship .modal-wrapper').removeClass('modal-opened-content');
				$("#existsFindMentorRecord").show();
				$("#findMentorNewFormContainer").hide();				
			}
		});		

		// CLOSES THE FIND MENTOR MODAL
		$("#btnCloseFindMentorModal").on('click', function(){
			// $('.modal-mentorship').hide();			
			$("#findMentorNewFormContainer").hide();
			$("#beMentorNewFormContainer").hide();
			$('.modal-mentorship').removeClass('is-visible-modal-mentorship');

			if (window.location.href.indexOf("fmredirect=true") > -1)
				window.history.pushState('/?fmredirect=true', 'Global Creators Community', '/');

			if (window.location.href.indexOf("bmredirect=true") > -1)
				window.history.pushState('/?bmredirect=true', 'Global Creators Community', '/');
			
			setTimeout(() => {
				$("#existsFindMentorRecord").removeAttr("style");
				$("#existsBeMentorRecord").removeAttr("style");
			}, 200);
		});			

		var hasErrorLocation, hasErrorUserIndustry = true;

		$("#goToStepTwoFindMentorBtn").on('click', function(){
			if($("#find-mentor-userindustry :selected").val() == '') {
				$("#findMentorUserindustryErrorMsgContainer").show();
				$("#findMentorUserindustryErrorMsg").html('Please select an industry.');
				hasErrorUserIndustry = true;
			}
			else{
				$("#findMentorUserindustryErrorMsgContainer").hide();
				$("#findMentorUserindustryErrorMsg").html('');
				hasErrorUserIndustry = false;
			}

			if($("#find-mentor-location").val() == '') {
				$("#findMentorLocationErrorMsgContainer").show();
				$("#findMentorLocationErrorMsg").html('Please enter a location.');
				hasErrorLocation = true;
			}
			else{
				$("#findMentorLocationErrorMsgContainer").hide();
				$("#findMentorLocationErrorMsg").html('');
				hasErrorLocation = false;
			}

			if(!hasErrorLocation && !hasErrorUserIndustry){
				$("#firstStepFindMentorForm").hide();
				// $(".modal-mentorship .modal-wrapper").css("top", "1em");
				$(".modal-mentorship .modal-wrapper").css("height", "auto");
				$(".modal-mentorship .modal-wrapper").removeClass("modal-opened-content");
				$('#secondStepFindMentorForm').show();
			}			
		});			

		$('#confirmFindMentorBtn').on('click',function(){
			if($("#find-mentor-email").val() == ''){
				$("#findMentorEmailErrorMsgContainer").show();
				$("#findMentorEmailErrorMsg").html('Please enter an email address.');
				return false;
			}
			else{
				$("#loaderFindMentor").show();

				var fm_userindustry = $("#find-mentor-userindustry-select .custom-options").find(".selected").attr('data-value');
				var fm_learninginterest = $("#learning-interest-select .custom-options").find(".selected").attr('data-value');
				var fm_location = $("#find-mentor-location").val();
				var fm_email = $("#find-mentor-email").val();

				var ajaxdata = {
					action: 'save_find_mentor_data',
					find_mentor_userindustry: fm_userindustry,
					find_mentor_learning_interest: fm_learninginterest,
					find_mentor_location: fm_location,
					find_mentor_email: fm_email
				};

				$.ajax({
					url: ajax_object.ajaxurl,
					type: 'POST',
					// dataType: 'json',
					data: ajaxdata,
					success: function(data){
						// $("#loaderFindMentor").hide();
						// $(".modal-mentorship").removeClass("is-visible-modal-mentorship");
						window.history.pushState('/?fmredirect=true', 'Global Creators Community', '/');
						window.location.reload();
					},
					error: function(msg){
						console.log(msg);
					}
				});
			}
		});				

		$('#newFindMentorRequestBtn').on('click',function(){
			$("#existsFindMentorRecord").hide();
			$("#findMentorNewFormContainer").show();
			$("#firstStepFindMentorForm").show();
			$("#secondStepFindMentorForm").hide();
			$('.modal-mentorship').addClass('modal-opened');
			$('.modal-mentorship .modal-wrapper').addClass('modal-opened-content');
			$('.modal-mentorship .modal-wrapper').css('height', 'auto');
		});					
		/* END FIND MENTOR FORM */

		/* BE MENTOR FORM */
		/**
		 * BE MENTOR EXISTING RECORD
		 */
		var bmDate = $("#beMentorDate").text().trim();
		var bmTime = $("#beMentorTime").text().trim();
		var bmFullDate = new Date(bmDate + " " + bmTime + " GMT");

		// Set Be Mentor existing record Date
		var bmMonthIndex = bmFullDate.getMonth();
		var bmMonthName = months[bmMonthIndex];				

		var bmNewDate = bmMonthName + " " + bmFullDate.getDate() + ", " + bmFullDate.getFullYear();
		
		$("#beMentorDate").text(bmNewDate);
		// End Set Be Mentor existing record Date

		// Set Be Mentor existing record Time
		var bmHours = bmFullDate.getHours();
		var bmMinutes = bmFullDate.getMinutes();

		var bmAmOrPm = bmHours >= 12 ? 'pm' : 'am';
		bmHours = (bmHours % 12) || 12;
		
		var bmNewTime = bmHours + ":" + bmMinutes + "" + bmAmOrPm; 
		
		$("#beMentorTime").text(bmNewTime);
		// End Set Be Mentor existing record Time
		/**
		  * END BE MENTOR EXISTING RECORD
		*/		

		$('[id="signUpBMBtn"]').on('click', function(){
			$(".modal-mentorship").removeClass('is-visible-modal-mentorship');
			$(".modal-login").removeClass('is-visible-modal-login');
			$(".modal-user").addClass('is-visible');
			$(".modal-user").addClass('is-visible-centered');
			$('.modal-user .modal-wrapper').addClass('modal-opened-content');

			$("#comesfrom").val('bementor');
		});

		$("#forgotPasswordBMBtn").on('click', function(){
			$(".modal-forgot-password").removeAttr("style");
			$(".modal-forgot-password").addClass('is-visible-forgot-password');
			$(".modal-forgot-password").addClass('is-visible-centered');
			$("#successEmailSent").hide();
			$("#successPasswordChanged").hide();
			$("#forgotPasswordFormContainer").show();
			$(".modal-login").removeClass('is-visible-modal-login');
			$(".modal-user").removeClass('is-visible');
			$(".modal-mentorship").removeClass('is-visible-modal-mentorship');			
		});

		// Perform AJAX login on form submit
		$('form#loginFormBM').on('submit', function(e){
			//$('form#loginForm p.status').show().text(ajax_login_object.loadingmessage);
			$("#loaderLoginBeMentor").show();

			if($("#usernameBM").val() == '') {
				$("#usernameBMErrorMsgContainer").show();
				$("#usernameBMErrorMsg").html('Please enter your username.');
				$("#loaderLoginBeMentor").hide();	
				return false;
			}
			else{
				$("#usernameBMErrorMsgContainer").hide();
				$("#usernameBMErrorMsg").html('');
			}

			if($("#loginPasswordBM").val() == '') {
				$("#loginBMErrorMsgContainer").show();
				$("#loginBMErrorMsg").html('Please enter your password.');
				$("#loaderLoginBeMentor").hide();	
				return false;
			}
			else{
				$("#loginBMErrorMsgContainer").hide();
				$("#loginBMErrorMsg").html('');
			}

			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: ajax_login_object.ajaxurl,
				data: { 
					'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
					'username': $('form#loginFormBM #usernameBM').val(), 
					'password': $('form#loginFormBM #loginPasswordBM').val(), 
					'security': $('form#loginFormBM #security').val() },
				success: function(data){
					//$('form#loginForm p.status').text(data.message);
					if (data.loggedin == true){						
						document.location.href = ajax_login_object.redirecturl + "/?bmredirect=true";
						$("#loaderLoginBeMentor").hide();										
					}
					else{
						$("#loaderLoginBeMentor").hide();
						$("#loginBMErrorMsgContainer").show();
						$("#loginBMErrorMsg").html(data.message);
					}
				}
			});
			e.preventDefault();
		});

		// SHOWS FIND MENTOR MODAL AFTER LOGIN
		if (window.location.href.indexOf("bmredirect=true") > -1) {			
			$("#findMentorTab").css('opacity', '0.4');
			$("#beMentorTab").css('opacity', '1');
			$(".be-mentor-container").show();
			$(".find-mentor-container").hide();

			if($("#existsBeMentorRecord").is(":visible")){
				$('.modal-mentorship').removeClass('modal-opened');
				$('.modal-mentorship .modal-wrapper').removeClass('modal-opened-content');
			}
			else{
				$('.modal-mentorship').addClass('modal-opened');
				$('.modal-mentorship .modal-wrapper').addClass('modal-opened-content');
			}
		}

		// OPEN THE BE MENTOR MODAL
		$("#btnBeMentor").on('click', function(){
			$("#findMentorTab").css('opacity', '0.4');
			$("#beMentorTab").css('opacity', '1');
			$('.modal-mentorship').show();	
			$(".login-be-mentor").show();
			$(".login-find-mentor").hide();
			$(".be-mentor-container").show();
			$(".find-mentor-container").hide();	
			
			if(!$("#existsBeMentorRecord").is(":visible")){
				$("#firstStepBeMentorForm").show();
				$("#secondStepBeMentorForm").hide();
				$("#thirdStepBeMentorForm").hide();
				$('.modal-mentorship').addClass('is-visible-centered');
				$('.modal-mentorship .modal-wrapper').css('height', 'auto');
			}
			else {
				$('.modal-mentorship .modal-wrapper').css('height', 'auto');
				$('.modal-mentorship').removeClass('modal-opened');
				$('.modal-mentorship .modal-wrapper').removeClass('modal-opened-content');
				$("#existsBeMentorRecord").show();
				$("#beMentorNewFormContainer").hide();				
			}
		});		

		// ADDS OPACITY TO CHECKED OPTION
		$(".field-business-aspect .chk-business-aspect").each(function(){
			$(this).on('click', function(){
				if($(this). prop("checked") == true)
					$(this).parent().css('opacity', '1');
				else
					$(this).parent().css('opacity', '.3');
			});
		});
		// END ADDS OPACITY TO CHECKED OPTION		
		
		var hasErrorBeMentorLocation, hasErrorBeMentorUserIndustry = true;

		$("#goToStepTwoBeMentorBtn").on('click', function(){
			if($("#be-mentor-userindustry :selected").val() == '') {
				$("#beMentorUserindustryErrorMsgContainer").show();
				$("#beMentorUserindustryErrorMsg").html('Please select an industry.');
				hasErrorBeMentorUserIndustry = true;
			}
			else{
				$("#beMentorUserindustryErrorMsgContainer").hide();
				$("#beMentorUserindustryErrorMsg").html('');
				hasErrorBeMentorUserIndustry = false;
			}			

			var array = []; 
            $(".chk-business-aspect:checked").each(function() { 				
                array.push($(this).val()); 
			}); 

			if(!hasErrorBeMentorLocation && !hasErrorBeMentorUserIndustry){
				$("#firstStepBeMentorForm").hide();
				$(".modal-mentorship .modal-wrapper").css("height", "auto");
				$(".modal-mentorship .modal-wrapper").removeClass("modal-opened-content");
				$('#secondStepBeMentorForm').show();

				$("#goToStepThreeBeMentorBtn").on('click', function(){			
					if($("#be-mentor-location").val() == '') {
						$("#beMentorLocationErrorMsgContainer").show();
						$("#beMentorLocationErrorMsg").html('Please enter a location.');
						hasErrorBeMentorLocation = true;
					}
					else{
						$("#beMentorLocationErrorMsgContainer").hide();
						$("#beMentorLocationErrorMsg").html('');
						hasErrorBeMentorLocation = false;
					}					
		
					if(!hasErrorBeMentorLocation){
						$("#firstStepBeMentorForm").hide();
						$('#secondStepBeMentorForm').hide();
						$('#thirdStepBeMentorForm').show();

						$('#confirmBeMentorBtn').on('click',function(){
							if($("#be-mentor-email").val() == ''){
								$("#beMentorEmailErrorMsgContainer").show();
								$("#beMentorEmailErrorMsg").html('Please enter an email address.');
								return false;
							}
							else{
								$("#loaderBeMentor").show();
				
								var bm_userindustry = $("#be-mentor-userindustry-select .custom-options").find(".selected").attr('data-value');
								var bm_business_aspect = array;
								var bm_additional_revenue = $("#additional-revenue-select .custom-options").find(".selected").attr('data-value');
								var bm_location = $("#be-mentor-location").val();
								var bm_email = $("#be-mentor-email").val();

								var ajaxdata = {
									action: 'save_be_mentor_data',
									be_mentor_userindustry: bm_userindustry,
									be_mentor_business_aspect: bm_business_aspect,
									be_mentor_additional_revenue: bm_additional_revenue,
									be_mentor_location: bm_location,
									be_mentor_email: bm_email
								};								
				
								$.ajax({
									url: ajax_object.ajaxurl,
									type: 'POST',
									// dataType: 'json',
									data: ajaxdata,
									success: function(data){
										// $("#loaderFindMentor").hide();
										// $(".modal-mentorship").removeClass("is-visible-modal-mentorship");
										window.history.pushState('/?bmredirect=true', 'Global Creators Community', '/');
										window.location.reload();
									},
									error: function(msg){
										console.log(msg);
									}
								});
							}
						});
					}			
				});
			}			
		});		

		$('#newBeMentorRequestBtn').on('click',function(){
			$("#existsBeMentorRecord").hide();
			$("#beMentorNewFormContainer").show();
			$("#firstStepBeMentorForm").show();
			$("#secondStepBeMentorForm").hide();
		});						
		/* END BE MENTOR FORM */

		$('.modal-toggle-mentorship').on('click', function(e) {

			if($('.modal-mentorship').hasClass('is-visible-modal-mentorship')){
				$('.modal-mentorship').removeClass('is-visible-modal-mentorship');
			}
			else{
				$('.modal-mentorship').addClass('is-visible-modal-mentorship');

				if(!$("#existsFindMentorRecord").is(":visible"))
					$('.modal-mentorship .modal-wrapper').addClass('modal-opened-content');
				
				if($("#existsBeMentorRecord").is(":visible"))
					$('.modal-mentorship .modal-wrapper').removeClass('modal-opened-content');

				if($("#loginFindMentorFormContainer").is(":visible"))
					$('.modal-mentorship .modal-wrapper').removeClass('modal-opened-content');

				if($("#loginBeMentorFormContainer").is(":visible"))
					$('.modal-mentorship .modal-wrapper').removeClass('modal-opened-content');
			}
		});
				
		// $('.modal-toggle-coming-soon').on('click', function(e) {
		// 	e.preventDefault();
		// 	$('.modal-coming-soon').toggleClass('is-visible-coming-soon');
		// });		

		$('.modal-toggle-forgot-password').on('click', function(e) {
			e.preventDefault();
			$('.modal-forgot-password').toggleClass('is-visible-forgot-password');
		});

		$('.modal-toggle-reset-password').on('click', function(e) {
			e.preventDefault();
			$('.modal-reset-password').toggleClass('is-visible-reset-password');
		});

		/* Registration Ajax */
		$('#registerBtn').on('click',function(){

			var action = 'register_action';
			
			var username = $("#email").val();
			var email = $("#email").val();
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			var password = $("#user-password").val();
			var usertype = $("#usertype-select .custom-options").find(".selected").attr('data-value');
			var userchannel = $("input[name='userchannel']:checked").val();
			var userhandle = $("#userhandle").val();
			// var userindustry = $("#userindustry").val();
			var userindustry = $("#userindustry-select .custom-options").find(".selected").attr('data-value');

			var ajaxdata = {
				action: 'register_action',
				username: username,
				email: email,
				firstname: firstname,
				lastname: lastname,
				password: password,
				usertype: usertype,
				userchannel : userchannel,
				userhandle: userhandle,
				userindustry: userindustry
			};
			
			$.post( ajaxurl, ajaxdata, function(res){ // ajaxurl must be defined previously
				$("#error-message").html(res);
			});
		});	

		$('#successBtn').on('click',function(){
			$(".modal-user").hide();

			if ($("#comesfrom").val() == 'findmentor') {
				window.location.href = window.location.href + "/?fmredirect=true";
			}
			else if ($("#comesfrom").val() == 'bementor') {
				window.location.href = window.location.href + "/?bmredirect=true";
			}
			else{
				window.location.reload();
			}
		});
		/* END SIGN UP FORM */

		/* PAYWALL FUNCTION */
		$('a').each(function() {
			var href = $(this).attr('href');
			var target = $(this).attr('target');

			// $(this).attr('onclick', "window.location='" + href + "'");
			$(this).on("click", function(e) {
				if(!$(this).hasClass('no-paywall') && !$(this).parents('.footer-second-column').length > 0 && !$(this).parents('.footer-third-column').length > 0 && !$(this).parents('.bottom-section-button').length > 0){
					// e.preventDefault();  
	
					//var href = $(this).attr('href');
	
					var data = {
						action: 'is_user_logged_in'
					};
						
					$.post(ajaxurl, data, function(response) {
						// if(response == 'yes') {
						// 	console.log("LOGGED IN");
						// 	// user logged in
						// 	if(target == '_blank'){
						// 		//window.location = href;
						// 		var windowReference = window.open();
						// 		// console.log(windowReference);
						// 		windowReference.location = href;
						// 		windowReference.target = '_blank';
						// 		// window.open(href, '_blank');
						// 	}
						// 	else
						// 		window.location = href;
						// } else {
						if(response == 'no') {
							// user not logged in
							$(this).removeAttr("target");
							$(this).removeAttr("href");
							//$('.modal-user').show();
	
							$('.modal-user').addClass('modal-opened');
							$('.modal-login').addClass('modal-opened');
							$('.modal-user .modal-wrapper').addClass('modal-opened-content');
							$('.modal-login .modal-wrapper').addClass('modal-opened-content');
							$('.modal-user').addClass('is-visible');
							//$('html, body').animate({ scrollTop: 0 }, 'fast');
						}
					});
				}
			});

			// if(!$(this).hasClass('no-paywall') && !$(this).parents('.footer-second-column').length > 0 && !$(this).parents('.footer-third-column').length > 0 && !$(this).parents('.bottom-section-button').length > 0){
			// 	$(this).removeAttr('target');
			// 	$(this).removeAttr('href');
			// }
		});		

		$(".footer").find("a").addClass("no-paywall");
		/* END PAYWALL FUNCTION */

		// CODE FOR DROPDOWNS
		// HOME DROPDOWNS
		$('.field-usertype').on('click', function() {
			$('#usertype-select').toggleClass('open');

			if($('#usertype-select').hasClass('open'))
				$(".custom-options-usertype").css("display", "block");				
			else
				$(".custom-options-usertype").css("display", "none");
		});

		$(document).mouseup(function(e) {
			var element = $("#usertype-select");

			// if the target of the click isn't the container nor a descendant of the container
			if (!element.is(e.target) && element.has(e.target).length === 0) 
			{
				element.removeClass('open');
			}
		});

		$('.field-userindustry').on('click', function() {
			$('#userindustry-select').toggleClass('open');

			if($('#userindustry-select').hasClass('open'))
				$(".custom-options-industry").css("display", "block");				
			else
				$(".custom-options-industry").css("display", "none");
		});

		$(document).mouseup(function(e) {
			var element = $("#userindustry-select");

			// if the target of the click isn't the container nor a descendant of the container
			if (!element.is(e.target) && element.has(e.target).length === 0) 
			{
				element.removeClass('open');
				$(".custom-options-industry").css("display", "none");				
			}

			// $(".modal-user .modal-wrapper").animate({
			// 	scrollTop: 0
			// }, 'fast');
		});
		
		$('.type-user-selection').on('click', function() {
			$('#type-user-select').toggleClass('open');
		});

		$(document).mouseup(function(e) {
			var element = $("#type-user-select");

			// if the target of the click isn't the container nor a descendant of the container
			if (!element.is(e.target) && element.has(e.target).length === 0) 
			{
				element.removeClass('open');
			}
		});

		$('.field-business-stage').on('click', function() {
			$('#business-stage-select').toggleClass('open');
		});

		$(document).mouseup(function(e) {
			var element = $("#business-stage-select");

			// if the target of the click isn't the container nor a descendant of the container
			if (!element.is(e.target) && element.has(e.target).length === 0) 
			{
				element.removeClass('open');
			}
		});
		// END HOME DROPDOWNS

		// FIND MENTOR DROPDOWNS
		$('.field-find-mentor-userindustry').on('click', function() {
			$('#find-mentor-userindustry-select').toggleClass('open');

			if($('#find-mentor-userindustry-select').hasClass('open'))
				$(".custom-options-find-mentor-industry").css("display", "block");				
			else
				$(".custom-options-find-mentor-industry").css("display", "none");
		});

		$(document).mouseup(function(e) {
			var element = $("#find-mentor-userindustry-select");

			// if the target of the click isn't the container nor a descendant of the container
			if (!element.is(e.target) && element.has(e.target).length === 0) 
			{
				element.removeClass('open');
			}
		});

		$('.field-learning-interest').on('click', function() {
			$('#learning-interest-select').toggleClass('open');

			if($('#learning-interest-select').hasClass('open'))
				$(".custom-options-learning-interest").css("display", "block");				
			else
				$(".custom-options-learning-interest").css("display", "none");
		});

		$(document).mouseup(function(e) {
			var element = $("#learning-interest-select");

			// if the target of the click isn't the container nor a descendant of the container
			if (!element.is(e.target) && element.has(e.target).length === 0) 
			{
				element.removeClass('open');
			}
		});
		// END FIND MENTOR DROPDOWNS		

		// BE MENTOR DROPDOWNS
		$('.field-be-mentor-userindustry').on('click', function() {
			$('#be-mentor-userindustry-select').toggleClass('open');

			if($('#be-mentor-userindustry-select').hasClass('open'))
				$(".custom-options-be-mentor-industry").css("display", "block");				
			else
				$(".custom-options-be-mentor-industry").css("display", "none");
		});

		$(document).mouseup(function(e) {
			var element = $("#be-mentor-userindustry-select");

			// if the target of the click isn't the container nor a descendant of the container
			if (!element.is(e.target) && element.has(e.target).length === 0) 
			{
				element.removeClass('open');
			}
		});

		$('.field-additional-revenue').on('click', function() {
			$('#additional-revenue-select').toggleClass('open');

			if($('#additional-revenue-select').hasClass('open'))
				$(".custom-options-additional-revenue").css("display", "block");				
			else
				$(".custom-options-additional-revenue").css("display", "none");
		});

		$(document).mouseup(function(e) {
			var element = $("#additional-revenue-select");

			// if the target of the click isn't the container nor a descendant of the container
			if (!element.is(e.target) && element.has(e.target).length === 0) 
			{
				element.removeClass('open');
			}

			// $(".modal-user .modal-wrapper").animate({
			// 	scrollTop: 0
			// }, 'fast');
		});
		// END BE MENTOR DROPDOWNS		

		for (const option of document.querySelectorAll(".custom-option")) {
			option.addEventListener('click', function() {
				if (!this.classList.contains('selected')) {
					this.parentNode.querySelector('.custom-option.selected').classList.remove('selected');
					this.classList.add('selected');
					this.closest('.custom-select').querySelector('.custom-select__trigger span').textContent = this.textContent;
				}
			})
		}

		window.addEventListener('click', function(e) {
			const select = document.querySelector('.custom-select');
			if($('.custom-select').length > 0) {
				if (!select.contains(e.target)) {
					select.classList.remove('open');
				}
			}
		});
		// END CODE FOR DROPDOWNS
	});	

	// When the user scrolls the page, execute myFunction
	$(window).scroll(function(){
		var sticky = $('.sticky-navbar'),
			scroll = $(window).scrollTop();

		var x = window.matchMedia("(max-width: 414px)");
		
		if (x.matches) {
			if (scroll >= 90) sticky.addClass('navbar-fixed');
			else sticky.removeClass('navbar-fixed');
		}
	  	else{
			if (scroll >= 190) sticky.addClass('navbar-fixed');
			else sticky.removeClass('navbar-fixed');
	  	}		
	});

})(jQuery, this);

