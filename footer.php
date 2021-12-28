<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Noon_Post
 */

?>

<footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
						<?php 
							if ( is_active_sidebar( 'sidebar-2' ) ) {
								dynamic_sidebar( 'sidebar-2' );
							}
						?>
                        <!-- <p>© Copyright 2021
                            <a href="#">JS Bangladesh</a>, All rights reserved.</p> -->
                    </div>
                    <div class="back">
                        <a href="#" class="back-top">
                            <i class="arrow_up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>

