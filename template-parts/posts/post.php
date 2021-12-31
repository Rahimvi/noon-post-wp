<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Noon_Post
 */

?>

<!--Post-1-->
                        <div class="card">
                            <div class="post-card">
                            <div class="post-card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>
                            <div class="post-card-content">
                                <a href="blog-grid.html" class="categorie">Livestyle</a>  
                                <h5><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h5>
                                    <?php the_excerpt(); ?>
                                <div class="post-card-info">
                                    <ul class="list-inline">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
                                        <li>
                                            <a href="author.html"><?php
										the_author_meta('display_name')
									 ?> </a>
                                        </li>
                                        <li class="dot"></li>
                                        <li>January 15, 2021</li>
                                    </ul>
                                </div>
                            </div>
                            </div><!--/-->
                        </div>
                        