<?php get_template_part("header-blog"); ?>

<!-- section -->
<section class="post-detail-section">

<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<p>
			<a href="/blog">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-arrow-back.svg" />
			</a>
			&nbsp;
			More 
			<strong>
				<?php the_category( ' <span style="font-weight: normal">&</span> ' ); // Separated by commas. ?>
			</strong> 
			Posts
		</p>

		<!-- post title -->
		<span class="post-title">
			<?php the_title(); ?>
		</span>
		<!-- /post title -->

		<span class="author">
			<?php esc_html_e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?>
		</span>

		<span class="post-category">
			<?php the_category( ' - ' ); ?>
		</span>

		<div class="post-container">
			<div class="post-left-content">
				<!-- post thumbnail -->
				<div class="post-image">
					<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
						<?php the_post_thumbnail(); // Fullsize image for the single post. ?>
					<?php endif; ?>
				</div>
				<!-- /post thumbnail -->

				<!-- post details -->
				<!-- <span class="date">
					<time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'H:i' ); ?>">
						<?php the_date(); ?> <?php the_time(); ?>
					</time>
				</span>
				<span class="comments"><?php if ( comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' ) ); ?></span> -->
				<!-- /post details -->

				<div class="post-content">
					<?php the_content(); // Dynamic Content. ?>
				</div>

				<?php /*the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>' ); // Separated by commas with a line break at the end. ?>

				<p><?php esc_html_e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

				<?php edit_post_link(); // Always handy to have Edit Post Links available. ?>

				<?php comments_template(); */ ?>

				<div class="post-social-networks">
					<span>Share</span>
					<?php echo do_shortcode('[Sassy_Social_Share]');  ?>
					<!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-instagram.svg" />
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-twitter.svg" />
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-facebook.svg" />
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-send.svg" />
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-bookmark.svg" /> -->
				</div>
			</div>
			<div class="post-right-content">
				<div class="related-posts">
					<span class="related-posts-section-title">
						Other posts you might like
					</span>
					<?php
						// Default arguments
						$args = array(
							'posts_per_page' => 4, // How many items to display
							'post__not_in'   => array( get_the_ID() ), // Exclude current post
							'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
						);

						// Check for current post category and add tax_query to the query arguments
						$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
						$cats_ids = array();  
						foreach( $cats as $wpex_related_cat ) {
							$cats_ids[] = $wpex_related_cat->term_id; 
						}
						if ( ! empty( $cats_ids ) ) {
							$args['category__in'] = $cats_ids;
						}

						// Query posts
						$wpex_query = new wp_query( $args );

						// Loop through posts
						foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
							<div class="related-posts-info">
								<div class="related-post-categories">
									<a href="<?php the_permalink(); ?>">
										<?php the_category( ' &nbsp;&nbsp;&nbsp;&nbsp; ' ); ?>
									</a>
								</div>
								<div class="related-post-title">
									<a href="<?php the_permalink(); ?>" 
										title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>">
										<?php the_title(); ?>
									</a>
								</div>
								<div class="related-post-read-minutes">
									<?php the_field('readminutes') ?>
								</div>
							</div>
						<?php
						// End loop
						endforeach;

						// Reset post data
						wp_reset_postdata(); 
					?>
				</div>
			</div>
		</div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else : ?>

	<!-- article -->
	<article>

		<h1><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

	</article>
	<!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->

<?php get_template_part("footer-blog"); ?>
