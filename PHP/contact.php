<?php
/*
Template Name: Contact
*/
?>

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
            <?php the_title(); ?>
        </div>
    </div>
    <div class="small-12 columns map nopad">
        <?php 

        $location = get_field('google_map');

        if( !empty($location) ):
        ?>
        <div class="acf-map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="small-12 columns contacts-block">
            <div class="small-12 medium-12 large-4 columns nopad contacts">
            	<?php if( have_rows('contact_info') ): ?>
		        <?php while( have_rows('contact_info') ): the_row();  ?>
                <div class="small-12 medium-4 large-12 columns nopad contacts-item text-center">
                    <img src="<?php the_sub_field('icon'); ?>">
                    <span><?php the_sub_field('title'); ?></span>
                    <p><?php the_sub_field('text'); ?></p>
                </div>
		        <?php endwhile; ?>
		        <?php endif; ?>
            </div>
            <div class="small-12 medium-12 large-8 columns nopad">
                <div class="small-12 columns nopad message-block">
                    <div class="small-12 columns contact-slogan nopad">
                        <?php _e('Susisiekite su Mumis', 'lvea'); ?>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="74" title="cform LT"]'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php wp_reset_query();?>
    <?php endwhile; else : ?>
    <p class="sorry"><?php _e( 'No content' ); ?></p>
    <?php endif; ?>

<?php get_footer (); ?>