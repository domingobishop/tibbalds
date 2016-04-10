<?php
/**
 * Template Name: Home page
 *
 */
get_header(); ?>

    <div id="content" class="page-intro">
        <div class="bc-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <div class="excerpt-content">
                                <?php if ($post->post_excerpt) the_excerpt(); ?>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            </ol>

                            <?php $args = array(
                                'post_parent' => $post->ID,
                                'post_type' => 'attachment',
                                'numberposts' => 5, // show all
                                'post_status' => 'any',
                                'post_mime_type' => 'image',
                                'orderby' => 'menu_order',
                                'order' => 'ASC'
                            );

                            $images = get_posts($args);
                            if ($images) { ?>
                                <?php $i = 0 ?>
                                <div class="carousel-inner" role="listbox">
                                    <?php foreach ($images as $image) { ?>
                                        <?php $i++ ?>
                                        <div class="item <?php if ($i == 1) {
                                            echo 'active';
                                        } ?>">
                                            <img src="<?php echo wp_get_attachment_url($image->ID); ?>" alt="Tabbalds" class="img-responsive">
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>