<?php get_header(); ?>

    <div id="content" class="page-intro color-red-bg post" role="main">
        <div class="bc-banner">
            <img src="http://placehold.it/1600x450?text=banner" class="img-responsive">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-header">
                        <?php if (is_home() && get_option('page_for_posts')) { ?>
                            <h1><?php echo apply_filters('the_title', get_page(get_option('page_for_posts'))->post_title); ?></h1>
                        <?php } elseif (is_singular()) { ?>
                            <h1><?php the_title(); ?></h1>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img src="http://placehold.it/400x300?text=news" class="img-responsive">
                    <h3>News</h3>
                    <p>Vel nostro inciderint an. Semper indoctum vix id, dolore quaerendum qui in.</p>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img src="http://placehold.it/400x300?text=best" class="img-responsive">
                    <h3>Best practise</h3>
                    <p>Vel nostro inciderint an. Semper indoctum vix id, dolore quaerendum qui in.</p>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img src="http://placehold.it/400x300?text=map" class="img-responsive">
                    <h3>Find us</h3>
                    <p>Vel nostro inciderint an. Semper indoctum vix id, dolore quaerendum qui in.</p>
                </div>
            </div>

            <!-- <div class="bc-post-loop-wrap">
                <?php if (have_posts()) : ?>
                    <?php /* The loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" class="row">
                            <div class="col-md-8 col-lg-8">
                                <h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                    </a></h3>

                                <div class="entry-summary">
                                    <?php the_excerpt(); ?>
                                </div>

                            </div>
                            <div class="col-md-4 col-lg-4">
                                <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
                                    <div class="entry-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
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
                </nav>
            </div> -->

        </div>
    </div>
    <!-- #content -->

<?php get_footer(); ?>