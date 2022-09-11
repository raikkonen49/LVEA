<?php get_header(); ?>
    
    
    
    
    <div class="news-header" style="background:url(<?php if (get_the_post_thumbnail()) {
    	the_post_thumbnail_url('page-title'); 
    } else {  
    	$topImage = get_bloginfo('template_directory').'/img/news-bg.png';
    	echo $topImage;
    }
    ?>) no-repeat center center">
        <div class="header-name text-right">
            <?php _e('Naujienos', 'lvea'); ?>
        </div>
    </div>
    <div class="small-12 columns nopad" data-equalizer>
        <div class="small-12 medium-6 large-7 columns wrap" data-equalizer-watch>
            <div class="small-12 columns nopad news-block">
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="small-12 columns news-content nopad">
                    <a href="<?php the_permalink(); ?>">
                        <div class="small-12 columns news-date nopad">
                            2017-02-27
                        </div>
                        <div class="small-12 columns news-title nopad">
                            <?php the_title(); ?>
                        </div>
                        <div class="small-12 columns news-text nopad">
                            <?php the_excerpt(); ?>
                        </div>
                    </a>
                </div>
                <?php wp_reset_query();?>
                <?php endwhile; else : ?>
                <p class="sorry"><?php _e( 'No content' ); ?></p>
                <?php endif; ?>

            </div>
            <div class="small-12 columns pagination nopad">
                <?php
                    global $wp_query;
                    $big = 99999999;
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                        'format' => '?paged=%#%',
                        'total' => $wp_query->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                        'show_all' => false,
                        'end_size' => 2,
                        'mid_size' => 3,
                        'prev_next' => true,
                        'prev_text' => '<<',
                        'next_text' => '>>',
                        'type' => 'list'
                    ));
                ?>
                <!-- <ul class="page-numbers">
                    <li><a class="prev page-numbers" href="#">&lt;&lt;</a></li>
                    <li><a class="page-numbers" href="#">1</a></li>
                    <li><span class="page-numbers current">2</span></li>
                    <li><a class="page-numbers" href="#">3</a></li>
                    <li><a class="page-numbers" href="#">4</a></li>
                    <li><a class="next page-numbers" href="#">&gt;&gt;</a></li>
                </ul> -->
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

    

<?php get_footer (); ?>