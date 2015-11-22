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

<div id="content" class="page-intro color-red-bg" style="background-color:<?php echo $bgcolour; ?>;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title-header">
            <h1>
              <?php the_title(); ?>
            </h1>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-6">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		        <div class="excerpt-content">
            		<?php if ($post->post_excerpt) the_excerpt(); ?>
          	</div>
          	<!-- .excerpt-content --> 
        </article>     
      </div>
      <div class="col-md-6 col-lg-6">

      </div>
    </div>
  </div>
</div>

<div class="bc-content">
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
  <div class="container projects">
  <div class="row">
  <?php
    for ($i = 1; $i <= 12; $i++) { ?>
        <div class="col-md-4 col-lg-4 service-tile service-<?php echo $i; ?>">
            <?php
            $image[$i] = get_post_meta($post->ID, 'image' . $i, true);
            $title[$i] = get_post_meta($post->ID, 'title' . $i, true);
            $text[$i] = get_post_meta($post->ID, 'text' . $i, true);
            $url[$i] = get_post_meta($post->ID, 'url' . $i, true);
            ?>
            <a href="<?php echo $url[$i]; ?>">
                <img src="<?php echo $image[$i]; ?>" alt="<?php echo $title[$i]; ?>" class="img-responsive">
            <h4><?php echo $title[$i]; ?></h4>
            </a>
            <div><p><?php echo $text[$i]; ?></p></div>
        </div>
    <?php
    }
    ?>
  </div>
  </div>
</div>

<?php endwhile; ?>
<!-- #content -->

<?php get_footer(); ?>