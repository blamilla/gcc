<?php get_template_part("header-blog"); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="search-section">
			<div class="search-section-container">
				<div class="search-section-top">
					<span>
						<a href="/blog">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-arrow-back.svg" />
							&nbsp;
							Back to Blog page
						</a>
					</span>
					<h1>
						<?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo '<strong>' . get_search_query() . '</strong>' ?>
					</h1>
				</div>
				
				<div class="searched-posts">
					<?php get_template_part( 'loop' ); ?>
				</div>

				<?php get_template_part( 'pagination' ); ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_template_part("footer-blog"); ?>
