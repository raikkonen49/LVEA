<?php get_header(); ?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    
    <div class="news-header" style="background:url(<?php if (get_the_post_thumbnail()) {
    	the_post_thumbnail_url('page-title'); 
    } else {  
    	$topImage = get_bloginfo('template_directory').'/img/news-bg.png';
    	echo $topImage;
    }
    ?>) no-repeat center center">
        <div class="header-name text-right">
            
        </div>
    </div>
    <div class="small-12 columns nopad" data-equalizer>
        <div class="small-12 medium-6 large-7 columns wrap" data-equalizer-watch>
            <div class="small-12 columns nopad">
                <div class="small-12 columns section-title nopad">
                    <?php the_title(); ?>
                </div>
                <div class="small-12 columns section-text nopad">
                	<?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php if (get_field('content_right_image')) {
        	$rightImage = get_field('content_right_image'); 
        } else {  
        	$rightImage = get_bloginfo('template_directory').'/img/section-tight-foto.png'; 
        }
        ?>
        <div class="small-12 medium-6 large-5 columns side-foto nopad" style="background:url(<?php echo $rightImage; ?>) no-repeat center center" data-equalizer-watch></div>
    </div>

    <?php wp_reset_query();?>
    <?php endwhile; else : ?>
    <p class="sorry"><?php _e( 'No content' ); ?></p>
    <?php endif; ?>

<?php get_footer (); ?>