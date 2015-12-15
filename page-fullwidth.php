<?php
/**
 * Template Name: Full width
 *
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php if (has_post_thumbnail() && !post_password_required()) : ?>
        <?php $bcimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
    <?php endif; ?>


    <div id="content" class="bc-content page full-width">
    <div class="container">
        <div class="row">
            <div class="page-intro col-md-12 col-lg-12">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="title-header">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                        <div class="excerpt-content">
                            <?php if ($post->post_excerpt) the_excerpt(); ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
        <article <?php post_class(); ?>>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <!-- .entry-content -->
        </article>
        <!-- #post -->
    </div>
<?php endwhile; ?>
    </div>
    </div>
    </div>
    <!-- #content -->

<?php get_footer(); ?>