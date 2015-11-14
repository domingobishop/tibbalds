<?php
/**
 * Template Name: Services Page
 *
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php if (has_post_thumbnail() && !post_password_required()) : ?>
        <?php $bcimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
    <?php endif; ?>
    <?php $servicescolour = get_post_meta($post->ID, 'Services colour', true); ?>
<style type="text/css">
  .services-menu ul li.current-menu-item {
      border-left: 3px solid <?php echo $servicescolour; ?>;
      padding-left: 7px;
  }
</style>
<div class="services-menu">     
  <div class="container text-left">
    <div class="row">
      <div class="col-md-12">
          <?php if (is_active_sidebar('services-menu')) { ?>
        <ul>
            <?php dynamic_sidebar('services-menu'); ?>
        </ul>
    <?php } ?>
      </div>
    </div>
  </div>
</div>

<div id="content" class="page-intro color-blu-bg post" role="main" style="background-color:<?php echo $servicescolour; ?>;">
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
        <?php if ($bcimage) {
        echo '<img src="' . $bcimage[0] . '" class="img-responsive"';
    } ?>
      </div>
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
        
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<!-- #content -->

<?php get_footer(); ?>