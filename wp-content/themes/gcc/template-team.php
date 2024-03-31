<?php 
    /**
    * Template Name: Template Team
    *
    */
    get_header();     

    get_template_part('internal-header');
?>    

    <main role="main" aria-label="Content">
		<!-- section -->
		<section class="team-page">

			<span class="team-page-title medium-text"><?php the_title(); ?></span>

        <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>			

            <div class="team-page-intro-text small-text">
                <?php the_content(); ?>
            </div>
            
            <div class="team-section">
                <?php 
                    $team_img_1 = get_field( "team_item_image_1" ); 
                    
                    if($team_img_1) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_1'); ?>" alt="<?php the_field('team_item_name_1'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_1'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_1'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_2 = get_field( "team_item_image_2" ); 
                    
                    if($team_img_2) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_2'); ?>" alt="<?php the_field('team_item_name_2'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_2'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_2'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_3 = get_field( "team_item_image_3" ); 
                    
                    if($team_img_3) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_3'); ?>" alt="<?php the_field('team_item_name_3'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_3'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_3'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_4 = get_field( "team_item_image_4" ); 
                    
                    if($team_img_4) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_4'); ?>" alt="<?php the_field('team_item_name_4'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_4'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_4'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_5 = get_field( "team_item_image_5" ); 
                    
                    if($team_img_5) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_5'); ?>" alt="<?php the_field('team_item_name_5'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_5'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_5'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_6 = get_field( "team_item_image_6" ); 
                    
                    if($team_img_6) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_6'); ?>" alt="<?php the_field('team_item_name_6'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_6'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_6'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_7 = get_field( "team_item_image_7" ); 
                    
                    if($team_img_7) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_7'); ?>" alt="<?php the_field('team_item_name_7'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_7'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_7'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_8 = get_field( "team_item_image_8" ); 
                    
                    if($team_img_8) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_8'); ?>" alt="<?php the_field('team_item_name_8'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_8'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_8'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_9 = get_field( "team_item_image_9" ); 
                    
                    if($team_img_9) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_9'); ?>" alt="<?php the_field('team_item_name_9'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_9'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_9'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_10 = get_field( "team_item_image_10" ); 
                    
                    if($team_img_10) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_10'); ?>" alt="<?php the_field('team_item_name_10'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_10'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_10'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_11 = get_field( "team_item_image_11" ); 
                    
                    if($team_img_11) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_11'); ?>" alt="<?php the_field('team_item_name_11'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_11'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_11'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_12 = get_field( "team_item_image_12" ); 
                    
                    if($team_img_12) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_12'); ?>" alt="<?php the_field('team_item_name_12'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_12'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_12'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_13 = get_field( "team_item_image_13" ); 
                    
                    if($team_img_13) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_13'); ?>" alt="<?php the_field('team_item_name_13'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_13'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_13'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_14 = get_field( "team_item_image_14" ); 
                    
                    if($team_img_14) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_14'); ?>" alt="<?php the_field('team_item_name_14'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_14'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_14'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_15 = get_field( "team_item_image_15" ); 
                    
                    if($team_img_15) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_15'); ?>" alt="<?php the_field('team_item_name_15'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_15'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_15'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <?php 
                    $team_img_16 = get_field( "team_item_image_16" ); 
                    
                    if($team_img_16) { 
                ?>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="<?php the_field('team_item_image_16'); ?>" alt="<?php the_field('team_item_name_16'); ?>" />
                        </div>
                        <div class="team-item-data">
                            <div class="team-item-name small-text">
                                <?php the_field('team_item_name_16'); ?>
                            </div>
                            <div class="team-item-text small-text">
                                <?php the_field('team_item_text_16'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>

            <?php /* comments_template( '', true ); */ // Remove if you don't want comments. ?>

            <br class="clear">

            <?php /* edit_post_link(); */ ?>

		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->
			<article>

				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
</div>