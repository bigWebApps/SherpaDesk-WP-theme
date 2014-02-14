<div class="col-sm-8 col-sm-offset-2">
	<article <?php post_class(); ?>>
	  <header>
	    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	  </header>
	  <div class="entry-summary">
	  	<?php echo get_the_post_thumbnail( $post_id, 'full', array(	'class'	=> "archive-thumb img-responsive" )); ?> 
	    <?php the_excerpt(); ?>
	  </div>
	</article>
</div>