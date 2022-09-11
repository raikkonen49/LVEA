<?php get_header(); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="small-12 columns rel nopad">
	    <div class="orbit" role="region" data-orbit data-timer-delay="4000" data-pause-on-hover="false" data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
	        <ul class="orbit-container">
	        	<?php $i = 0; ?>
	        	<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 5) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); $i++; ?>
				<?php if ($i == 1) {
					$act = 'is-active';
				} else {
					$act = '';
				} ?>
                <li class="orbit-slide <?php echo $act; ?>" style="background:url(<?php the_post_thumbnail_url('full-screen'); ?>) no-repeat center center">
	                <div class="slide-content">
	                    <div class="slide-content-title">
	                        <?php _e('Naujienos', 'lvea'); ?>
	                    </div>
	                    <div class="slide-content-text">
	                        <?php the_title(); ?>
	                    </div>
	                    <div class="slide-content-link">
	                        <a href="<?php the_permalink(); ?>"><?php _e('Skaityti daugiau', 'lvea'); ?></a>
	                    </div>
	                </div>
	            </li>
				<?php wp_reset_query();?>
				<?php endwhile; ?>
	        </ul>
	    </div>
	    <div class="middle-nav-block">
	        <div class="row">
	            <div class="small-12 columns middle-nav">
	            	<?php wp_nav_menu( array('menu' => 'nav-secondary', 'menu_class' => 'nav-secondary-hold' )); ?>
	            </div>
	        </div>
	    </div>
	</div>
    
    <div class="small-12 columns nopad" data-equalizer>
        <div class="small-12 medium-12 large-7 columns left-panel" data-equalizer-watch>
        	<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'cat' => array(4,5)) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="small-12 columns nopad left-panel-title">
                <?php the_title(); ?>
            </div>
            <div class="small-12 columns nopad left-panel-text">
                <?php the_excerpt(); ?>
            </div>
            <div class="small-12 columns nopad left-panel-link">
                <a href="<?php the_permalink(); ?>"><?php _e('Skaityti daugiau', 'lvea'); ?></a>
            </div>
			<?php wp_reset_query();?>
			<?php endwhile; ?>
        </div>
        <div class="small-12 medium-12 large-5 columns video text-right nopad" data-equalizer-watch>
        	<a class="various fancybox.iframe" href="<?php the_field('homepage_video_link_youtube'); ?>"></a>
        </div>
    </div>
    <div class="small-12 columns nopad main-foto" style="background:url(<?php echo bloginfo('template_directory'); ?>/img/main-bg.png) no-repeat center center"></div>

    <?php wp_reset_query();?>
    <?php endwhile; else : ?>
    <p class="sorry"><?php _e( 'No content' ); ?></p>
    <?php endif; ?>
    
<?php get_footer (); ?>