<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php if (has_post_thumbnail() && !post_password_required()) : ?>
        <?php $bcimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
    <?php endif; ?>
    <?php $bgcolour = get_post_meta($post->ID, 'bg colour', true); ?>

    <div id="content" class="bc-content page">
    <div class="container">
        <div class="row">
            <div class="page-intro col-lg-12">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="title-header" style="background-color:<?php echo $bgcolour; ?>;">
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
            echo '<div class"feature-img"><img src="' . $bcimage[0] . '" class="img-responsive"></div>';
        } ?>
        <?php $map = get_post_meta($post->ID, 'Map', true); ?>
        <div class="map"><?php echo $map; ?></div>
    </div>
    <?php endwhile; ?>
    </div>
    </div>
    </div>
    <!-- #content -->

<?php get_footer(); ?>