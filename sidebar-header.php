<?php theme_print_sidebar('header-widget-area'); ?>

<div class="site-branding">
	<div class="site-branding-container">
		<a class="logo-container" href="http://dev.randalllawfirm.com/" rel="home">
		    <div class="logo"></div>
		</a>

		<div class="site-title-container">

		<?php if(theme_get_option('theme_header_show_headline')): ?>
			<?php $headline = theme_get_option('theme_'.(is_home()?'posts':'single').'_headline_tag'); ?>
			<<?php echo $headline; ?> class="site-title-line1">
		    <a href="<?php echo get_option('home'); ?>/">THE<br /></a>
		</<?php echo $headline; ?>>
			<<?php echo $headline; ?> class="site-title-line2">
		    <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
		</<?php echo $headline; ?>>
		<?php endif; ?>

		<?php if(theme_get_option('theme_header_show_slogan')): ?>
			<?php $slogan = theme_get_option('theme_'.(is_home()?'posts':'single').'_slogan_tag'); ?>
				<<?php echo $slogan; ?> class="site-description">
					<?php bloginfo('description'); ?>
				</<?php echo $slogan; ?>>
		<?php endif; ?>
		</div>

		<div class="site-contact-container">
			<h3><span class="site-header-address">1777 Western Ave. Albany, NY 12203</span><span class="site-header-phone">Phone: <a href="tel:5188691205">518-869-1205</a></span><span class="site-header-fax">Fax: 518-452-2145</span></h3>
			<div class="site-header-attorney-container">
				<h3 class="site-header-attorney">Denise McCarthy Randall</h3> 
				<h3 class="site-header-attorney">Robert G. Randall</h3>
			</div>
		</div>
	</div>
</div>

<div class="header-image-container">
	<div class="header-image"></div>
</div>
                    