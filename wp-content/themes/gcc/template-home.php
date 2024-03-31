<?php 
    /**
    * Template Name: Template Home
    *
    */
    get_header();  
    
    get_template_part('default-header');
?>

<?php
    global $wpdb, $user_ID;  

    if (!$user_ID) {  
        //All code goes in here.                        
?>        
        <section class="user-section">
            <div class="type-user-container">
                <div class="type-user-selection custom-select-wrapper">                    
                    <div class="custom-select" id="type-user-select">                        
                        <span class="medium-text">
                            I am             
                        </span>
                        <div class="custom-select__trigger">                                                        
                            <span>
                                an aspiring influencer
                            </span>
                            <!-- <div class="arrow"></div> -->
                        </div>
                        <div class="custom-options">
                            <span class="custom-option selected" data-value="aspiring-influencer">
                                an aspiring influencer
                            </span>
                            <span class="custom-option" data-value="established-influencer">
                                an established influencer
                            </span>
                            <span class="custom-option" data-value="agency-brand-platform">
                                an agency, brand or platform
                            </span>
                            <span class="custom-option" data-value="advocate">
                                an advocate of creators
                            </span>
                        </div>
                    </div>
                </div>
                <div class="user-selection-arrow">
                    <button class="modal-toggle" href="#open-modal" aria-label="Open Modal">
                        <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-arrow-back.svg" class="lazyload" alt="User Registration" />
                    </button>
                </div>
            </div>
        </section>
<?php
    }  
?>

<div class="slider-section">
    <div class="loader"></div>
    <div id="slider-bg-line" class="slider-background-line" style="display: none"></div>
    <div id="owl-carousel-top" class="owl-carousel" style="display: none;">
        <div class="owl-item1">
            <img src="<?php the_field('slider_image_1'); ?>" class="slider-image-1" alt="Slider Image" />
        </div>
        <div class="owl-item2">
            <img src="<?php the_field('slider_image_2'); ?>" class="slider-image-2" alt="Slider Image" />
        </div>
        <div class="owl-item3">
            <img src="<?php the_field('slider_image_3'); ?>" class="slider-image-3" alt="Slider Image" />
        </div>
        <div class="owl-item4">
            <img src="<?php the_field('slider_image_4'); ?>" class="slider-image-4" alt="Slider Image" />
        </div>
        <div class="owl-item5">
            <img src="<?php the_field('slider_image_5'); ?>" class="slider-image-5" alt="Slider Image" />
        </div>
        <div class="owl-item6">
            <img src="<?php the_field('slider_image_6'); ?>" class="slider-image-6" alt="Slider Image" />
        </div>
        <div class="owl-item7">
            <img src="<?php the_field('slider_image_7'); ?>" class="slider-image-7" alt="Slider Image" />
        </div>
        <div class="owl-item8">
            <img src="<?php the_field('slider_image_8'); ?>" class="slider-image-8" alt="Slider Image" />
        </div>
        <div class="owl-item9">
            <img src="<?php the_field('slider_image_9'); ?>" class="slider-image-9" alt="Slider Image" />
        </div>
        <?php 
            $img_10 = get_field( "slider_image_10" ); 
            
            if($img_10) { 
        ?>
                <div class="owl-item10">
                    <img src="<?php the_field('slider_image_10'); ?>" class="slider-image-10" alt="Slider Image" />
                </div>
        <?php
            }
        ?>
        <?php 
            $img_11 = get_field( "slider_image_11" ); 
            
            if($img_11) { 
        ?>
            <div class="owl-item11">
                <img src="<?php the_field('slider_image_11'); ?>" class="slider-image-11" alt="Slider Image" />
            </div>
        <?php
            }
        ?>
        <?php 
            $img_12 = get_field( "slider_image_12" ); 
            
            if($img_12) {  
        ?>
            <div class="owl-item12">
                <img src="<?php the_field('slider_image_12'); ?>" class="slider-image-12" alt="Slider Image" />
            </div>
        <?php
            }
        ?>
        <?php 
            $img_13 = get_field( "slider_image_13" ); 
            
            if($img_13) { 
        ?>
            <div class="owl-item13">
                <img src="<?php the_field('slider_image_13'); ?>" class="slider-image-13" alt="Slider Image" />
            </div>
        <?php
            }
        ?>
        <?php 
            $img_14 = get_field( "slider_image_14" ); 
            
            if($img_14) { 
        ?>
            <div class="owl-item14">
                <img src="<?php the_field('slider_image_14'); ?>" class="slider-image-14" alt="Slider Image" />
            </div>
        <?php
            }
        ?>
        <?php 
            $img_15 = get_field( "slider_image_15" ); 
            
            if($img_15) { 
        ?>
            <div class="owl-item15">
                <img src="<?php the_field('slider_image_15'); ?>" class="slider-image-15" alt="Slider Image" />
            </div>
        <?php
            }
        ?>
        <?php 
            $img_16 = get_field( "slider_image_16" ); 
            
            if($img_16) { 
        ?>
            <div class="owl-item16">
                <img src="<?php the_field('slider_image_16'); ?>" class="slider-image-16" alt="Slider Image" />
            </div>
        <?php
            }
        ?>
        <?php 
            $img_17 = get_field( "slider_image_17" ); 
            
            if($img_17) { 
        ?>
            <div class="owl-item17">
                <img src="<?php the_field('slider_image_17'); ?>" class="slider-image-17" alt="Slider Image" />
            </div>
        <?php
            }
        ?>
        <?php 
            $img_18 = get_field( "slider_image_18" ); 
            
            if($img_18) { 
        ?>
            <div class="owl-item18">
                <img src="<?php the_field('slider_image_18'); ?>" class="slider-image-18" alt="Slider Image" />
            </div>
        <?php
            }
        ?>
    </div>
</div>
<div class="blog-posts-section">
    <div class="blog-posts-container">
        
        <div class="blog-posts-main-container">
            <?php       
                // set the “paged” parameter (use ‘page’ if the query is on a static front page)
                $args = array(
                    'post_type' => 'post',
                    //'posts_per_page' => 3,
                    'cat'=> get_field('blog_category_selector')
                );
                
                // the query
                $the_query = new WP_Query( $args );
            ?>
            
            <div id="owl-carousel-blog-posts" class="owl-carousel">
                <?php if ( $the_query->have_posts() ) : ?>
                <?php
                    // the loop
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <div class="blog-posts-main-posts-container">
                    <div class="blog-posts-main-left-title large-text">
                        <?php 
                            foreach((get_the_category()) as $category){
                                echo $category->name."<br>";
                            }	
                        ?>
                    </div>
                    <div class="blog-posts-post-container">
                        <div class="blog-posts-post-left">                            
                            <div class="blog-posts-post-left-title medium-text">
                                <?php the_field('blog_post_title'); ?>
                            </div>
                            <div class="blog-posts-post-left-text small-text">
                                <?php the_field('blog_post_text'); ?>
                            </div>
                        </div>
                        <div class="blog-posts-post-right">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <!-- Design for the 375 breakpoint -->
                        <div class="blog-posts-post-375" style="display: none;">
                            <div class="blog-posts-post-375-title medium-text">
                                <?php the_field('blog_post_title'); ?>
                            </div>
                            <div class="blog-posts-post-375-image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="blog-posts-post-375-text small-text">
                                <?php the_field('blog_post_text'); ?>
                            </div>
                        </div>  
                        <!-- End Design for the 375 breakpoint -->
                    </div>
                </div>

                <?php 
                    endwhile; 
                ?>

                <?php
                    // clean up after the query and pagination
                    wp_reset_postdata();
                ?>
                
                <?php else: ?>
                
                <p>
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
                
                <?php endif; ?>

            </div>
            
        </div>
    </div>
</div>
<section class="creator-stories-section" style="background: url('<?php the_field('creator_stories_background_image'); ?>') no-repeat center center, linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) );">
    <div class="creator-stories-container spacing">
        <span class="creator-stories-title small-text">
            <?php the_field('creator_stories_section_title'); ?>            
        </span>
        <div class="creator-stories-main-text-container spacing">
            <span class="creator-stories-main-text">
                <?php the_field('creator_stories_main_title'); ?>
            </span>
        </div>       
    </div>
    <div class="creator-stories-bottom-box">
        <div class="creator-stories-bottom-text-container">
            <span class="creator-stories-bottom-text">                
                <?php the_field('creator_stories_black_box_text'); ?>
            </span>
        </div>    
    </div>
</section>
<div class="find-tribe-section">
    <div class="find-tribe-container">
        
        <div class="find-tribe-title small-text">
            Find your tribe
        </div>

        <div class="find-tribe-main-container">
            <?php       
                // set the “paged” parameter (use ‘page’ if the query is on a static front page)
                $args = array(
                    'post_type' => 'post',
                    //'posts_per_page' => 3,
                    'cat'=> get_field('digital_talks_category_selector')
                );
                
                // the query
                $the_query = new WP_Query( $args );
            ?>
            
            <div id="owl-carousel-digital-talks" class="owl-carousel">
                <?php if ( $the_query->have_posts() ) : ?>
                <?php
                    // the loop
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <div class="find-tribe-main-posts-container">
                    <div class="find-tribe-main-left-title large-text">
                        <?php 
                            foreach((get_the_category()) as $category){
                                echo $category->name."<br>";
                            }	
                        ?>
                    </div>
                    <div class="find-tribe-post-container">
                        <div class="find-tribe-post-left">
                            <div class="find-tribe-post-left-title medium-text">
                                <?php the_field('digital_talks_post_title'); ?>
                            </div>
                            <div class="find-tribe-post-left-text small-text">
                                <?php the_field('digital_talks_post_text'); ?>
                            </div>
                        </div>
                        <div class="find-tribe-post-right">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <!-- Design for the 375 breakpoint -->
                        <div class="find-tribe-post-375" style="display: none;">
                            <div class="find-tribe-post-375-title medium-text">
                                <?php the_field('digital_talks_post_title'); ?>
                            </div>
                            <div class="find-tribe-post-375-image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="find-tribe-post-375-text small-text">
                                <?php the_field('digital_talks_post_text'); ?>
                            </div>
                        </div>  
                        <!-- End Design for the 375 breakpoint -->
                    </div>
                </div>

                <?php 
                    endwhile; 
                ?>

                <?php
                    // clean up after the query and pagination
                    wp_reset_postdata();
                ?>
                
                <?php else: ?>
                
                <p>
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
                
                <?php endif; ?>

            </div>
            
        </div>
    </div>
</div>
<hr />
<div class="mentorship-section">
    <div class="mentorship-container">
        
        <div class="mentorship-main-container">

            <div class="mentorship-main-posts-container">
                <div class="mentorship-main-left-title large-text mentorship-title-desktop">
                    <?php the_field('mentorship_section_title'); ?>
                </div>
                <div class="mentorship-post-container">
                    <div class="mentorship-post-left">
                        <div class="mentorship-main-left-title large-text mentorship-title-tablet">
                            <?php the_field('mentorship_section_title'); ?>
                        </div>
                        <div class="mentorship-post-left-title medium-text">
                            <?php the_field('mentorship_main_title'); ?>
                        </div>
                        <div class="mentorship-post-left-text small-text">
                            <?php //the_field('experiences_post_text'); ?>
                        </div>
                    </div>
                    <div class="mentorship-post-divider">
                        <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/divider.svg" class="lazyload" alt="Divider" />
                    </div>
                    <div class="mentorship-post-right">                        
                        <div class="mentorship-post-right-top">
                            <!-- MODAL COMING SOON -->
                            <!-- <div class="modal modal-coming-soon">
                                <div class="modal-overlay modal-toggle-coming-soon"></div>
                                <div class="modal-wrapper modal-transition">
                                    <div class="modal-header">
                                        <button class="modal-close modal-toggle-coming-soon" aria-label="Close Modal">
                                            <a class="icon-close icon no-paywall" id="btnCloseMentorModal">
                                                <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-close.svg" class="lazyload" alt="Close Modal" />
                                            </a>
                                        </button>                
                                    </div>
                                
                                    <div class="modal-body">
                                        <div class="modal-content">
                                            <span class="coming-soon-title">
                                                Coming Soon!
                                            </span>
                                            <span class="coming-soon-text">
                                                Check back in the Summer.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- END MODAL COMING SOON -->                            

                            <span class="mentorship-post-right-text">
                                <?php the_field('mentorship_right_top_text_1'); ?>
                            </span>
                            <span class="mentorship-post-right-action">
                                <?php the_field('mentorship_right_top_text_2'); ?>
                                <div class="mentor-arrow">
                                    <!-- <button id="btnFindMentor" class="modal-toggle-coming-soon" href="#" aria-label="Open Modal"> -->
                                    <button id="btnFindMentor" class="modal-toggle-mentorship" href="#" aria-label="Open Modal">
                                        <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-arrow-back.svg" class="lazyload" alt="User Registration" />
                                    </button>
                                </div>
                            </span>
                        </div>
                        <hr />
                        <div class="mentorship-post-right-bottom">
                            <span class="mentorship-post-right-text">
                                <?php the_field('mentorship_right_bottom_text_1'); ?>
                            </span>
                            <span class="mentorship-post-right-action">
                                <?php the_field('mentorship_right_bottom_text_2'); ?>
                                <div class="mentor-arrow">
                                    <!-- <button id="btnBeMentor" class="modal-toggle-coming-soon" href="#" aria-label="Open Modal"> -->
                                    <button id="btnBeMentor" class="modal-toggle-mentorship" href="#" aria-label="Open Modal">
                                        <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-arrow-back.svg" class="lazyload" alt="User Registration" />
                                    </button>
                                </div>
                            </span>
                        </div>
                    </div>                    
                    <!-- MODAL MENTORSHIP -->
                    <div class="modal modal-mentorship">
                        <div class="modal-overlay modal-toggle-mentorship"></div>
                        <div class="modal-wrapper modal-transition">
                            <div class="modal-header">
                                <button class="modal-close" aria-label="Close Modal">
                                    <a class="icon-close icon no-paywall" id="btnCloseFindMentorModal">
                                        <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon-close.svg" class="lazyload" alt="Close Modal" />
                                    </a>
                                </button>                
                            </div>
                        
                            <div class="modal-body">
                                <div class="modal-tabs">
                                    <span id="findMentorTab" class="find-mentor-tab">Find a Mentor</span>
                                    <span id="beMentorTab" class="be-mentor-tab">Be a Mentor</span>
                                </div>
                                <div class="modal-content">
                                <?php
                                    global $wpdb, $user_ID;  

                                    if (!$user_ID) {  
                                        //All code goes in here.
                                ?>
                                        <style>
                                            .modal-tabs{
                                                display: none !important;
                                            }
                                        </style>
                                        <div class="modal-user-login-container login-find-mentor form-wrapper" id="loginFindMentorFormContainer">
                                            <?php                    
                                                get_template_part('user-login-fm');
                                            ?>
                                        </div>
                                        <div class="modal-user-login-container login-be-mentor form-wrapper" id="loginBeMentorFormContainer">
                                            <?php                    
                                                get_template_part('user-login-bm');
                                            ?>
                                        </div>
                                <?php
                                    }
                                    else {
                                ?>
                                        <div class="find-mentor-container">
                                <?php
                                        // FIND MENTOR
                                        $existsFindMentorPreviousRecord = get_user_meta( $user_ID, 'find_mentor_lastUpdateDate' , true );
                                        
                                        if ( !empty ( $existsFindMentorPreviousRecord ) ) {
                                ?>
                                            <div class="modal-exists-find-mentor-record-container" id="existsFindMentorRecord">
                                                <?php
                                                    get_template_part('exists-find-mentor-record');
                                                ?>
                                            </div>
                                            <div class="modal-find-mentor-container" id="findMentorNewFormContainer" style="display: none;">
                                                <?php
                                                    get_template_part('find-mentor');
                                                ?>
                                            </div>
                                <?php
                                        }
                                        else {
                                ?>
                                            <div class="modal-find-mentor-container" id="findMentorFormContainer">
                                                <?php
                                                    get_template_part('find-mentor');
                                                ?>
                                            </div>
                                <?php
                                        }
                                        // END FIND MENTOR
                                ?>
                                        </div>
                                        <div class="be-mentor-container">
                                <?php
                                        // BE MENTOR
                                        $existsBeMentorPreviousRecord = get_user_meta( $user_ID, 'be_mentor_lastUpdateDate' , true );

                                        if ( !empty ( $existsBeMentorPreviousRecord ) ) {
                                ?>
                                            <div class="modal-exists-be-mentor-record-container" id="existsBeMentorRecord">
                                                <?php
                                                    get_template_part('exists-be-mentor-record');
                                                ?>
                                            </div>
                                            <div class="modal-be-mentor-container" id="beMentorNewFormContainer" style="display: none;">
                                                <?php
                                                    get_template_part('be-mentor');
                                                ?>
                                            </div>
                                <?php
                                        }
                                        else {
                                ?>
                                            <div class="modal-be-mentor-container" id="beMentorFormContainer">
                                                <?php
                                                    get_template_part('be-mentor');
                                                ?>
                                            </div>
                                <?php
                                        }
                                        // END BE MENTOR
                                ?>
                                        </div>
                                <?php
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL MENTORSHIP -->
                </div>
            </div>
        </div>
    </div>
</div>
<hr />
<div class="experiences-section">
    <div class="experiences-container">
        
        <div class="experiences-main-container">
            <?php       
                // set the “paged” parameter (use ‘page’ if the query is on a static front page)
                $args = array(
                    'post_type' => 'post',
                    //'posts_per_page' => 3,
                    'cat'=> get_field('experiences_category_selector')
                );
                
                // the query
                $the_query = new WP_Query( $args );
            ?>
            
            <div id="owl-carousel-experiences" class="owl-carousel">
                <?php if ( $the_query->have_posts() ) : ?>
                <?php
                    // the loop
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <div class="experiences-main-posts-container">
                    <div class="experiences-main-left-title large-text">
                        <?php 
                            foreach((get_the_category()) as $category){
                                echo $category->name."<br>";
                            }	
                        ?>
                    </div>
                    <div class="experiences-post-container">
                        <div class="experiences-post-left">
                            <div class="experiences-post-left-title medium-text">
                                <?php the_field('experiences_post_title'); ?>
                            </div>
                            <div class="experiences-post-left-text small-text">
                                <?php the_field('experiences_post_text'); ?>
                            </div>
                        </div>
                        <div class="experiences-post-right">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <!-- Design for the 375 breakpoint -->
                        <div class="experiences-post-375" style="display: none;">
                            <div class="experiences-post-375-title medium-text">
                                <?php the_field('experiences_post_title'); ?>
                            </div>
                            <div class="experiences-post-375-image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="experiences-post-375-text small-text">
                                <?php the_field('experiences_post_text'); ?>
                            </div>
                        </div>  
                        <!-- End Design for the 375 breakpoint -->
                    </div>
                </div>

                <?php 
                    endwhile; 
                ?>

                <?php
                    // clean up after the query and pagination
                    wp_reset_postdata();
                ?>
                
                <?php else: ?>
                
                <p>
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
                
                <?php endif; ?>

            </div>
            
        </div>
    </div>
</div>
<hr />
<div class="courses-section">
    <div class="courses-container">
        
        <div class="courses-main-container">
            <?php       
                // set the “paged” parameter (use ‘page’ if the query is on a static front page)
                $args = array(
                    'post_type' => 'post',
                    //'posts_per_page' => 3,
                    'cat'=> get_field('courses_category_selector')
                );
                
                // the query
                $the_query = new WP_Query( $args );
            ?>
            
            <div id="owl-carousel-courses" class="owl-carousel">
                <?php if ( $the_query->have_posts() ) : ?>
                <?php
                    // the loop
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <div class="courses-main-posts-container">
                    <div class="courses-main-left-title large-text">
                        <?php 
                            foreach((get_the_category()) as $category){
                                echo $category->name."<br>";
                            }	
                        ?>
                    </div>
                    <div class="courses-post-container">
                        <div class="courses-post-left">
                            <div class="courses-post-left-title medium-text">
                                <?php the_field('courses_post_title'); ?>
                            </div>
                            <div class="courses-post-left-text small-text">
                                <?php the_field('courses_post_text'); ?>
                            </div>
                        </div>
                        <div class="courses-post-right">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <!-- Design for the 375 breakpoint -->
                        <div class="courses-post-375" style="display: none;">
                            <div class="courses-post-375-title medium-text">
                                <?php the_field('courses_post_title'); ?>
                            </div>
                            <div class="courses-post-375-image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="courses-post-375-text small-text">
                                <?php the_field('courses_post_text'); ?>
                            </div>
                        </div>  
                        <!-- End Design for the 375 breakpoint -->
                    </div>
                </div>

                <?php 
                    endwhile; 
                ?>

                <?php
                    // clean up after the query and pagination
                    wp_reset_postdata();
                ?>
                
                <?php else: ?>
                
                <p>
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
                
                <?php endif; ?>

            </div>
            
        </div>
    </div>
</div>
<hr />
<div class="podcasts-section">
    <div class="podcasts-container">
        
        <div class="podcasts-main-container">
            <?php       
                // set the “paged” parameter (use ‘page’ if the query is on a static front page)
                $args = array(
                    'post_type' => 'post',
                    //'posts_per_page' => 3,
                    'cat'=> get_field('podcasts_category_selector')
                );
                
                // the query
                $the_query = new WP_Query( $args );
            ?>
            
            <div id="owl-carousel-podcasts" class="owl-carousel">
                <?php if ( $the_query->have_posts() ) : ?>
                <?php
                    // the loop
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <div class="podcasts-main-posts-container">
                    <div class="podcasts-main-left-title large-text">
                        <?php 
                            foreach((get_the_category()) as $category){
                                echo $category->name."<br>";
                            }	
                        ?>
                    </div>
                    <div class="podcasts-post-container">
                        <div class="podcasts-post-left">
                            <div class="podcasts-post-left-title medium-text">
                                <?php the_field('podcasts_post_title'); ?>
                            </div>
                            <div class="podcasts-post-left-text small-text">
                                <?php the_field('podcasts_post_text'); ?>
                            </div>
                        </div>
                        <div class="podcasts-post-right">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <!-- Design for the 375 breakpoint -->
                        <div class="podcasts-post-375" style="display: none;">
                            <div class="podcasts-post-375-title medium-text">
                                <?php the_field('podcasts_post_title'); ?>
                            </div>
                            <div class="podcasts-post-375-image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="podcasts-post-375-text small-text">
                                <?php the_field('podcasts_post_text'); ?>
                            </div>
                        </div>  
                        <!-- End Design for the 375 breakpoint -->
                    </div>
                </div>

                <?php 
                    endwhile; 
                ?>

                <?php
                    // clean up after the query and pagination
                    wp_reset_postdata();
                ?>
                
                <?php else: ?>
                
                <p>
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
                
                <?php endif; ?>

            </div>
            
        </div>
    </div>
</div>
<section class="bottom-section">
    <div class="bottom-section-container">
        <div class="bottom-section-title">
            <?php echo get_field("bottom_section_title"); ?>
        </div>
        <div class="bottom-section-text">
            <?php echo get_field("bottom_section_text"); ?>            
        </div>
        <!-- <div class="bottom-section-logo">
            <?php echo get_field("bottom_section_logo"); ?>            
        </div> -->
        <!-- <img data-src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/underline.svg" class="lazyload" alt="MOE Logo" /> -->
        <div class="bottom-section-button small-text">
            <?php echo get_field("bottom_section_button"); ?>            
        </div>
    </div>
</section>
<?php get_footer(); ?>
</div>