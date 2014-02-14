<?php
/*
Template Name: Page Right Sidebar
*/
?>

<div class="page-header-bg">
	<div class="container">
        <h1>
        	<?php echo roots_title(); ?>
        </h1>
    </div>
</div>



<div class="container">
	<div class="row">
    	<div class="col-md-8">		
            <?php get_template_part('templates/content', 'page'); ?>
		</div>
        <div class="col-md-4">
          	<?php get_template_part('templates/sidebar'); ?>
        </div>
    </div>
</div>