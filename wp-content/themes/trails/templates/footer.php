<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-4 text-left">
        <h3>Categories</h3>
        <?php if( have_rows('map_icons') ): ?>

            	<ul>
            
            	<?php while( have_rows('map_icons') ): the_row(); 
            
            		// vars
            		$image = get_sub_field('icon_image');
            		$name = get_sub_field('icon_name');
            
            		?>
            
            		<li>
                	
                        <?php echo $name; ?>
            		</li>
            
            	<?php endwhile; ?>
            
            	</ul>
            
            <?php endif; ?>
      </div>
      <div class="col-4">
        
      </div>
      <div class="col-4 text-left">
        <h3>Contact</h3>
        ST. CLAIR RIVER TRAIL<br>
        c/o St. Clair Civic Centre<br>
        1155 Emily Street<br>
        Mooretown Ontario<br>
        N0N 1M0<br>
        519-867-2655<br>
        Fax 519867-2393<br>
      </div>
    </div>
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
