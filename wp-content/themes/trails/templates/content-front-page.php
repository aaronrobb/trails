<div class="container">
    <div class="row">
        <div class="col-12 map-header">
            The richest knowledge is found in the conversations between friends and neighbours. <br>
            We believe the best way to enjoy our trail is through the experiences and insights of our of local community.<br>
            Don’t take our word for it, take theirs.<br>
            Click an activity below and to find recommendations from the people who call the St Clair River Trail home.<br>
        </div>
    </div>
</div>
<section class="map-icon-holder">
<div class="container-fluid no-gutters">
    <div class="row">
        <div class="col-12 mt-3 map-icons" id="trailmap">
                <span>What do you want to do today?</span>
                <?php if( have_rows('map_icons') ): ?>
                    <div class="container">
                	<div class="row d-flex justify-content-center">
                
                	<?php while( have_rows('map_icons') ): the_row(); 
                
                		// vars
                		$image = get_sub_field('icon_image');
                		$name = get_sub_field('icon_name');
                
                		?>
                
                		<div class="col-2 text-center">
                    		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /><br>
                            <?php echo $name; ?>
                		</div>
                
                	<?php endwhile; ?>
                
                	</div>
                    </div>
                <?php endif; ?>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="row">
        <div class="col-12">
            <?php echo do_shortcode('[put_wpgm id=1]'); ?>
        </div>
    </div>
</div>

</section>
<div class="container home-content">
    <div class="row">
        <div class="col-12">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
<div style="margin-bottom:500px; display:block;"></div>