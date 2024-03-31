<?php get_template_part("header-blog"); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="category-section">
			<div class="category-section-container">
				<span>
					<a href="/blog">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-arrow-back.svg" />
						&nbsp;
						Back to Blog page
					</a>
				</span>
				<h1><?php esc_html_e( 'Category: ', 'html5blank' ); ?><strong><?php echo single_cat_title(); ?></strong></h1>
				
				<div class="category-posts">
					<?php get_template_part( 'loop' ); ?>
				</div>

				<?php get_template_part( 'pagination' ); ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_template_part("footer-blog"); ?>
