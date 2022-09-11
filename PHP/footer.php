	    <div class="small-12 columns footer-bg">
	        <div class="small-12 columns text-center footer">
	        	<ul>
		        	<?php if( have_rows('footer_logos', 'options') ): ?>
			        <?php while( have_rows('footer_logos', 'options') ): the_row();  ?>
	                <li>
	                    <a href="<?php the_sub_field('logo_link'); ?>"><img src="<?php the_sub_field('logo_image'); ?>"></a>
	                </li>
			        <?php endwhile; ?>
			        <?php endif; ?>
	            </ul>
	        </div>
	        <div class="small-12 footer-text columns nopad">
	            <div class="small-12 medium-12 large-8 columns footer-text-left">
	                <span><?php _e('Kontaktai.', 'lvea'); ?></span> <?php the_field('address', 'options'); ?>
	                <span><?php _e('Tel. :', 'lvea'); ?></span> <?php the_field('tel_nr', 'options'); ?>
	                <span><?php _e('El. p.:', 'lvea'); ?></span>
	                <a href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
	            </div>
	            <div class="small-12 medium-12 large-4 columns footer-text-right text-right">
	                <?php the_field('copyrights', 'options'); ?>
	            </div>
	        </div>
	    </div>

	    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/what-input.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/motion-ui.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

	    <?php wp_footer(); ?> 
	</body>

</html>
