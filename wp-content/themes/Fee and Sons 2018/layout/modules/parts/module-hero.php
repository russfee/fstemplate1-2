<?php // Hero Module ?>
<div class="row constrain">
	<div id="banner" style="background-image: url(<?php the_sub_field('banner_image'); ?>);">
		<div class="banner-content <?php the_sub_field('banner_overlay'); ?> <?php the_sub_field('text_alignment'); ?>"> 
			<div class="home-banner-headline <?php the_sub_field('text_color'); ?>">
			<?php the_sub_field('banner_headline'); ?>
			</div> <!--home-banner-headline-->
			<div class="home-banner-subtitle <?php the_sub_field('text_color'); ?>">
			<?php the_sub_field('banner_subheading'); ?>
			</div> <!--home-banner-headline-->
			<div class="banner-button-dark">
			<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button_text'); ?></a>
			</div> <!--home-banner-button-->

		</div> <!--banner-content-->
	</div> <!--banner-->
</div><!--row-->

