<?php get_header(); ?>
            <div class="root-container">
                <div class="main-contents">
                    <div class="blog-posts-container">
                        <?php
                            // Start the Loop.
                            while ( have_posts() ) : the_post();
                            endwhile;
                        ?>
                        <div class="blog-post">
                            <div class="image-container single">
                                <?php the_post_thumbnail('large', array( 'class' => 'featured-image single' )); ?>
                            </div>
                            <p class="date-published">
                                <i class="far fa-clock"></i>&nbsp;<?php the_time(get_option('date_format')); ?> by <a href="#"><?php the_author(); ?></a>
                            </p>
                            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>", title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <p class=""><?php the_content(); ?></p>
                        </div>
                    </div>
                    <div class="page-navigator single">
<!--
                        <?php 
                            the_post_navigation( array(
                            'prev_text'           => '« Previous Post: %title',
                            'next_text'           => '» Next Post: %title',
                            ) ); 
                        ?>
-->
                        <span class="previous-post"><?php previous_post_link( '« %link', '%title' ); ?></span>
                        <span class="next-post"><?php next_post_link( '%link »' , '%title' ); ?></span>
                    </div>
                </div><!-- .main-contents -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
