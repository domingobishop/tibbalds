<?php
/**
 * Template Name: Discipline Page
 *
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php if (has_post_thumbnail() && !post_password_required()) : ?>
        <?php $bcimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
    <?php endif; ?>
    <?php $bgcolour = get_post_meta($post->ID, 'bg colour', true); ?>

    <div id="content" class="bc-content discipline">
        <div class="container">
            <div class="row">
                <div class="page-intro col-lg-12">
                    <div class="title-header" style="background-color:<?php echo $bgcolour; ?>;">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                        <div class="excerpt-content">
                            <?php if ($post->post_excerpt) the_excerpt(); ?>
                        </div>
                    </div>
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
                        echo '<img src="' . $bcimage[0] . '" class="img-responsive">';
                    } ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Project examples</h2>
                </div>
                <div class="projects">
                    <?php
                    $projectCat = get_post_meta($post->ID, 'category', true);
                    $args = array( 'posts_per_page' => 12,'category_name' => $projectCat );
                    $projects = get_posts( $args );
                    foreach ( $projects as $post ) : setup_postdata( $post ); ?>
                        <div class="col-sm-6 col-md-4 project-<?php echo $post->ID; ?>">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'img-responsive' ) ); ?>
                            </a>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; ?>
    <!-- #content -->

<?php get_footer(); ?>