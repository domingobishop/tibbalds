<?php
/**
 * Template Name: Our team
 *
 */
get_header(); ?>

    <div id="content" class="page-intro team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-header">
                        <?php if (is_home() && get_option('page_for_posts')) { ?>
                            <h1><?php echo apply_filters('the_title', get_page(get_option('page_for_posts'))->post_title); ?></h1>
                        <?php } elseif (is_singular()) { ?>
                            <h1><?php the_title(); ?></h1>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <article <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                        <!-- .entry-content -->
                    </article>
                    <!-- #post -->
                    </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="row bc-post-loop-wrap">
                <?php query_posts('category_name=' . get_the_title() . '&post_status=publish,future'); ?>
                <?php if (have_posts()) : ?>
                    <?php /* The loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>

                            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                <div id="post-<?php the_ID(); ?>">
                                <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
                                            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                <?php endif; ?>
                                <h4 class="entry-title">
                                        <?php the_title(); ?>
                                </h4>
                                    <div class="entry-content-title">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>

                    <?php endwhile; ?>
                <?php else : ?>
                    <h2>No content</h2>
                <?php endif; ?>
                <nav>
                    <ul>
                        <li class="previous"><?php next_posts_link(__('&#8249; Older posts', 'blankcanvas')); ?></li>
                        <li class="next"><?php previous_posts_link(__('Newer posts &#8250;', 'blankcanvas')); ?></li>
                    </ul>
                    <!-- end of .navigation -->
                </nav>
                <!-- #post-loop -->
            </div>
            </div>
            </div>
        </div>
    </div>
    <!-- #content -->

<?php get_footer(); ?>