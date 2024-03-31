<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="article-info pt-cv-ifield">
			<div class="article-image">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<?php endif; ?>
				<!-- /post thumbnail -->
			</div>
			<div class="article-category">
				<span class="post-category">
					<?php the_category( ' - ' ); ?>
				</span>
			</div>
			<div class="article-title">
				<!-- post title -->
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				<!-- /post title -->
			</div>
			<div class="article-read-minutes">
				<?php the_field("readminutes"); ?>
			</div>
			<!-- post details -->
			<!-- <span class="date">
				<time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'H:i' ); ?>">
					<?php the_date(); ?> <?php the_time(); ?>
				</time>
			</span>
			<span class="author"><?php esc_html_e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if ( comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' ) ); ?></span> -->
			<!-- /post details -->

			<?php /*html5wp_excerpt( 'html5wp_index' ); // Build your custom callback length in functions.php. ?>

			<?php edit_post_link(); */ ?>
		</div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else : ?>

	<!-- article -->
	<article class="no-posts-found">
		<h2><?php esc_html_e( 'Sorry, there is nothing to display for the selected filter.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
