<?php get_template_part("header-blog"); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="author-section">
			<div class="author-section-container">
				<span>
					<a href="/blog">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-arrow-back.svg" />
						&nbsp;
						Back to Blog page
					</a>
				</span>
				<h1><?php esc_html_e( 'Author posts for ', 'html5blank' ); ?><strong><?php echo get_the_author(); ?></strong></h1>
				
				<div class="author-posts">
					<?php get_template_part( 'loop' ); ?>
				</div>

				<?php get_template_part( 'pagination' ); ?>
			</div>
		</section>
		<!-- /section -->
	</main>

	<script type="javascript">
		$(document).ready(function () {
			$(".category-events").hide();
		}
	</script>

<?php get_template_part("footer-blog"); ?>