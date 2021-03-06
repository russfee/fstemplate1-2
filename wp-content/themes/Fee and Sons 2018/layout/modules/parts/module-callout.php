<?php // Callout Module ?>

<div class="row constrain">


<?php if ( get_sub_field( 'headline_single' ) ): ?>

<div class="row">
	<div class="callout-single-container <?php the_sub_field('vertical_justify'); ?>" style="background-color: <?php the_sub_field('background_colour_single'); ?>; background-image: <?php the_sub_field('image_overlay'); ?>url(<?php the_sub_field('background_image_single'); ?>)">
		<div class="callout-single-content-container <?php the_sub_field('horizontal_justify'); ?>">
			<h2 style="color: <?php the_sub_field('text_colour'); ?>"><?php the_sub_field('headline_single'); ?></h2>
			<p style="color: <?php the_sub_field('text_colour'); ?>; width:<?php the_sub_field('paragraph_width'); ?>%"><?php the_sub_field('paragraph_callout_single'); ?></p>
			<div class="<?php the_sub_field('button_color'); ?>">
			<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button_text'); ?></a>
			</div> <!--home-banner-button-->
		</div> <!--callout-single-content-container-->
	</div> <!--callout-single-content-container-->
</div> <!--row-->	

<?php else: ?>

<!--This is displayed when the field_name is MULTIPLE, or rather when the headline_single hasn't been filled out-->
<div class="row">
	<div class="callout-multiple-container">

<?php if(get_sub_field('callouts_repeater')): ?>
				
				
					<?php while(has_sub_field('callouts_repeater')): ?>
				
		<div class="callout-multiple-indvidual">
			<div class="callout-multiple-image">
			 <img src="<?php the_sub_field('top_image'); ?>">
			</div> <!--callout-multiple-image-->
			<div class="callout-multiple-headline">
			<?php the_sub_field('headline'); ?>
			</div> <!--callout-multiple-headline-->
			<div class="callout-multiple-paragraph">
			<?php the_sub_field('paragraph'); ?>
			</div> <!--callout-multiple-paragraph-->
			<div class="banner-button-dark">
				<a href="#"><?php the_sub_field('button_text'); ?></a>
			</div> <!--banner-button-dark-->
		</div> <!--callout-multiple-individual-->
					<?php endwhile; ?>
				<?php endif; ?>		
		
		
	</div> <!--callout-multiple-container-->
</div> <!--row-->
<?php endif;?>

</div> <!--row-->
