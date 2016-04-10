<?php
/**
 * Template Name: Page of posts
 *
 */
get_header(); ?>

    <div id="content" class="page-intro page-of-posts">
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
            <div class="bc-post-loop-wrap">
                <?php query_posts('category_name=' . get_the_title() . '&post_status=publish,future'); ?>
                <?php if (have_posts()) : ?>
                    <?php /* The loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" class="row">
                            <div class="col-sm-8 col-md-8 col-lg-8">
                                <h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                    </a></h3>
                                <small><?php the_date('F j, Y'); ?></small>
                                <div class="entry-summary">
                                    <?php the_excerpt(); ?>
                                </div>
                                <!-- .entry-summary -->
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
                                    <div class="entry-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </article>
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
    <!-- #content -->

<?php get_footer(); ?>