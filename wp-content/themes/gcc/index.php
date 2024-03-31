<?php get_template_part( 'header-blog' ); ?>

	<div class="blog-slider-section">
		<?php
			echo do_shortcode('[smartslider3 slider=2]');
		?>
	</div>

	<main role="main" aria-label="Content">
		<!-- section post list -->
		<?php echo do_shortcode("[pt_view id=e01e661wqk]"); ?>
		<!-- /section -->
	</main>

	<section class="blog-signup-section">
		<div class="blog-signup-container">
			<div class="blog-signup-main-text spacing">
				Have you outgrown your <br>
				notebooks and spreadsheets?<br> 
				Work smarter, get paid faster<br>
				and up your game by<br>
				signing up for
			</div>
			<div class="blog-signup-moe-text">
				MOE.
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/underline.svg" />
			</div>
			<div class="blog-signup-button-container">
				<a href="https://www.moeassist.com/register" class="blog-signup-button">
					Sign up for FREE
				</a>
			</div>		
		</div>
	</section>

<?php get_template_part( 'footer-blog' ); ?>