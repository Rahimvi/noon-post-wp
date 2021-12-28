<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Noon_Post
 */

get_header();
?>

	<main id="primary" class="site-main">

	<section class="section pt-55 ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 mb-20">
			<?php
		while ( have_posts() ) :
			the_post();
			?>
				<div class="post-single">
					<div class="post-single-image">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="post-single-content">
						<a href="blog-grid.html" class="categorie">travel</a> 
						<h4> <?php the_title() ?></h4>
						<div class="post-single-info">
							<ul class="list-inline">
								<li><a href="author.html"><img src="assets/img/author/1.jpg" alt=""></a></li>
								<li><a href="author.html">David Smith</a> </li>
								<li class="dot"></li>
								<li>January 15, 2021</li>
								<li class="dot"></li>
								<li>3 comments</li>
							</ul>
						</div>
					</div>
			  
					<div class="post-single-body">
						<?php the_content(); ?>
						<div class="row">
							<div class="col-md-12 ">
								<div class="image">
									<img src="assets/img/blog/2.jpg" alt="">
									<p>Caption can be used to add info</p>
								</div>
							</div>                             
						</div>
						
						<p> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
							in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
							in culpa qui officia
							deserunt mollit anim id est laborum.
						</p>
						<h5>2 -  Research before booking</h5>
					
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
							irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
							cupidatat non proident.
						</p>
						<div class="quote">
							<div><i class="icon_quotations_alt"></i></div>
							<p>
								The man who goes alone can start today; but he who 
								travels with another must wait till that other is ready.
							</p>
							<small>Henry David Thoreau.</small>
						</div>
				
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
							irure dolor Unknown may service in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
							cupidatat non proident.
						</p>
						<h5>3 - Pack light , Easy Sustainable Travel Tip</h5>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
							irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
							cupidatat non proident.
						>sunt in culpa qui officia deserunt mollit anim id e st laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
							do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.
						</p>
						<div class="row">
							<div class="col-md-6 ">
								<div class="image">
									<img src="assets/img/blog/21.jpg" alt="">
									<p>Caption can be used to add info</p>
								</div>
							</div>
							<div class="col-md-6 ">
								<div class="image">
									<img src="assets/img/blog/20.jpg" alt="">
									<p>Caption can be used to add info</p>
								</div>
							</div>
						</div>
					  
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
							irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
							cupidatat non proident.
						</p>
						<h5>4 - Be respectful of the environment</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						
						</p>
						<ul class="list">
							<li>Be respectful of the environment </li>
							<li>Pick a sustainable travel destination instead of a popular one</li>
							<li>Research before booking</li>
							<li>Pack light , Easy Sustainable Travel Tip</li>
							<li>Be respectful of the environment</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
							irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
					</div>

					<div class="post-single-footer">
						<div class="tags">
							<ul class="list-inline">
								<li>
									<a href="blog-grid.html">Travel</a>
								</li>
								<li>
									<a href="blog-grid.html">Nature</a>
								</li>
								<li>
									<a href="blog-grid.html">tips</a>
								</li>
								<li>
									<a href="blog-grid.html">forest</a>
								</li>
								<li>
									<a href="blog-grid.html">beach</a>
								</li>
							
							</ul>
						</div>
						<div class="social-media">
							<ul class="list-inline">
								<li>
									<a href="#" class="color-facebook">
										<i class="fab fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="color-instagram">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li>
									<a href="#" class="color-twitter">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#" class="color-youtube">
										<i class="fab fa-youtube"></i>
									</a>
								</li>
								<li>
									<a href="#" class="color-pinterest">
										<i class="fab fa-pinterest"></i>
									</a>
								</li>
							</ul>
						</div>                           
					</div>
				</div>
			<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'noonpost' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'noonpost' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
				<!--Post-single-->
				 <!--/-->

				<!--next & previous-posts-->
				<div class="row">
					<div class="col-md-6">
						<div class="widget">
							<div class="widget-next-post">
								<div class="small-post">
									<div class="image">
										<a href="post-default.html">
										<img src="assets/img/latest/1.jpg" alt="...">
										</a>                                          
									</div>
									<div class="content">
										<div>
											<a class="link" href="post-default.html"><i class="arrow_left"></i>Preview post</a>
										</div>
										<a href="post-default.html">7 Healty Dinner Recipes for a Date Night at Home</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="widget">
							<div class="widget-previous-post">
								<div class="small-post">
									<div class="image">
										<a href="post-default.html">
										   <img src="assets/img/blog/2.jpg" alt="...">
										</a>
									</div>
									<div class="content">
										<div>
											<a class="link" href="post-default.html">
												<span> Next post</span>
												<span class="arrow_right"></span>
											</a>
										</div>
										<a href="post-default.html">How to Choose Outfits for Work for woman and men</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--/-->

				<!--widget-comments-->
				<div class="widget mb-50">
					<div class="title">
						<h5>3 Comments</h5>
					</div>
					<ul class="widget-comments">
						<li class="comment-item">
							<img src="assets/img/user/1.jpg" alt="">
							<div class="content">
								<ul class="info list-inline">
									<li>Mohammed Ali</li>
									<li class="dot"></li>
									<li> January 15, 2021</li>
								</ul>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci eum placeat
									quod non fugiat aliquid sit similique!
								</p>
								<div><a href="#" class="link"> <i class="arrow_back"></i> Reply</a></div>
							</div>
						</li>
						<li class="comment-item">
							<img src="assets/img/author/1.jpg" alt="">
							<div class="content">
								<ul class="info list-inline">
									<li>Simon Albert</li>
									<li class="dot"></li>
									<li> January 15, 2021</li>
								</ul>
												  
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci eum placeat quod non
									fugiat aliquid sit similique!
								</p>
								<div>
									<a href="#" class="link">
										<i class="arrow_back"></i> Reply</a>
								</div>
							</div>
						</li>
						<li class="comment-item">
							<img src="assets/img/user/2.jpg" alt="">
							<div class="content">
						   
								<ul class="info list-inline">
									<li>Adam bobly</li>
									<li class="dot"></li>
									<li> January 15, 2021</li>
								</ul>
				
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci eum placeat
									quod non fugiat aliquid sit similique!
								</p>

								<div>
									<a href="#" class="link">
										<i class="arrow_back"></i> Reply</a>
								</div>
							</div>
						</li>
					</ul>
				   <!--Leave-comments-->
					<div class="title">
						<h5>Leave a Reply</h5>
					</div>
					<form class="widget-form" action="#" method="POST" id="main_contact_form">
						<p>Your email adress will not be published ,Requied fileds are marked*.</p>
						<div class="alert alert-success contact_msg" style="display: none" role="alert">
							Your message was sent successfully.
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message*" required="required"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" placeholder="Name*" required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="Email*" required="required">
								</div>
							</div>
							<div class="col-12 mb-20">
								<div class="form-group">
									<input type="text" name="website" id="website" class="form-control" placeholder="website">
								</div>
								<label>
									<input name="name" type="checkbox" value="1" required="required"> 
								   <span>save my name , email and website in this browser for the next time I comment.</span>                                   
								</label>
							</div>
							<div class="col-12">
								<button type="submit" name="submit" class="btn-custom">
									Post Comment
								</button>
							</div> 
						</div>
					</form>
				</div>
			</div>
			<!----- Sidebar----->
			<div class="col-lg-4 max-width">
					<?php
							get_template_part('sidebar');
					?>
				<!--/-->
			</div> 
		</div>
	</div>
</section>
<!--/-->

	</main><!-- #main -->

<?php

get_sidebar();
get_footer();


