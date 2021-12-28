<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Noon_Post
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="widget ">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
                        
                    </div>
                    <!--/-->
                    
                    <!--widget-categories-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Categories</h5>
                        </div>
                        <ul class="widget-categories">
                            <li>
                                <a href="#" class="categorie">Livestyle</a>
                                <span class="ml-auto">22 Posts</span>
                            </li>
                            <li>
                                <a href="#" class="categorie">Travel</a>
                                <span class="ml-auto">18 Posts</span>
                            </li>
                            <li>
                                <a href="#" class="categorie">Food</a>
                                <span class="ml-auto">14 Posts</span>
                            </li>
                            <li>
                                <a href="#" class="categorie">fashion</a>
                                <span class="ml-auto">10 Posts</span>
                            </li>
                        </ul>
                    </div>
                    <!--/-->
                    
                    <!--widget-instagram-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Instagram</h5>
                        </div>
                        <ul class="widget-instagram">
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/1.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/2.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/3.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/4.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/5.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/6.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    
                    </div>
                    <!--/-->
                    <!--widget-tags-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Tags</h5>
                        </div>
                        <div class="widget-tags">
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
                                <li>
                                    <a href="blog-grid.html">fashion</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">livestyle</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">healty</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">food</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">breakfast</a>
                                </li>
                    
                            </ul>
                        </div>
                    </div>
