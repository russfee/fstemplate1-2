
	<div class="row constrain">
		<div class="footer-container">
			<div class="copyright">
				<p>&copy; <?php echo date("Y") ?> <a href="<?php echo esc_url( home_url() ) ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved.</p>
			</div><!-- copyright -->
			<div class="designed-by">
				<p>Website designed by <a title="Build Studio Inc." href="http://buildstudio.ca" target="_blank" rel="nofollow">Build Studio</a></p>
			</div><!-- designed-by-->
		</div> <!--footer-container-->
	</div><!-- row -->
</div><!-- container -->


<!-- CSS
================================================== -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/responsive.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/meanmenu.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/scss/main.css">


<!-- JS
================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Google Fonts
================================================== -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

<!-- Google Analytics
================================================== -->

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_footer(); ?>
</body>
</html>