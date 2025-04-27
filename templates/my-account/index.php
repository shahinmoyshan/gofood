<?php
/**
 * Render My Account Page.
 *
 * @package goFood
 */

if ( ! is_user_logged_in() ) :
	get_template_part( 'templates/my-account/login' );
else : ?>
	
	<section id="my-account">
		<?php
			get_template_part( 'templates/my-account/tab', 'orders' );
		?>
	</section>

	<?php
	endif;
