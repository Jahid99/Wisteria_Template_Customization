<?php
/**
 * The template for displaying site header
 * @package Wisteria
 */
?>

<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="site-header-inside-wrapper">
					<div class="site-branding-wrapper">
						<?php the_custom_logo(); ?>

						<div class="site-branding">
							<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><i>You Will Get 100% Working Source Codes Here</i></h1>
							<?php else : ?>
								<p class="site-title"><i>You Will Get 100% Working Source Codes Here</i></p>
							<?php endif; ?>

							
						</div>
					</div><!-- .site-branding-wrapper -->
				</div><!-- .site-header-inside-wrapper -->

			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</header><!-- #masthead -->
