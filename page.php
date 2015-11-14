<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php if (has_post_thumbnail() && !post_password_required()) : ?>
        <?php $bcimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
    <?php endif; ?>

    <div id="page-intro" class="page-intro color-blu-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="title-header">
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                        </div>
                        <div class="excerpt-content">
                            <?php if ($post->post_excerpt) the_excerpt(); ?>
                        </div>
                        <!-- .excerpt-content -->

                    </article>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="bc-content page" role="main">
    <div class="container">
    <div class="row">
    <div class="col-md-6 col-lg-6">
        <article <?php post_class(); ?>>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <!-- .entry-content -->
        </article>
        <!-- #post -->
    </div>
    <div class="col-md-6 col-lg-6">
        <?php if ($bcimage) {
            echo '<img src="' . $bcimage[0] . '" class="img-responsive"';
        } ?>
    </div>
<?php endwhile; ?>
    </div>
    </div>
    </div>
    <!-- #content -->

<?php get_footer(); ?>