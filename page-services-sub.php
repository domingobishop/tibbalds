<?php
/**
 * Template Name: Services Sub Page
 *
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
<?php $bcimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<?php endif; ?>
<?php $servicescolour = get_post_meta($post->ID, 'Services colour', true); ?>

<style type="text/css">
  .services-menu ul li.current-menu-item {
      border-left: 3px solid <?php echo $servicescolour; ?>;
      padding-left: 7px;
  }
  .services-menu ul li.current-page-ancestor {
      border-left: 3px solid <?php echo $servicescolour; ?>;
      padding-left: 7px;
  }
</style>
<div class="services-menu">     
  <div class="container text-left">
    <div class="row">
      <div class="col-md-12">
          <?php if ( is_active_sidebar( 'services-menu' ) ) { ?>
          <ul>
            <?php dynamic_sidebar( 'services-menu' ); ?>
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
      <div class="col-md-12 col-lg-12">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <!-- .entry-content --> 
        </article>     
      </div>
    </div>
    <div class="row">
        <section>
          <?php
          for ($i = 1; $i <= 12; $i++) { ?>
              <div class="col-md-4 col-lg-4 service-tile service-<?php echo $i ; ?>">
              <?php
              $image[$i] = get_post_meta($post->ID, 'image'.$i, true); 
              $title[$i] = get_post_meta($post->ID, 'title'.$i, true); 
              $text[$i] = get_post_meta($post->ID, 'text'.$i, true); 
              $url[$i] = get_post_meta($post->ID, 'url'.$i, true);
              ?>
              <a href="<?php echo $url[$i] ; ?>" target="_blank">
              <img src="<?php echo $image[$i] ; ?>" alt="<?php echo $title[$i] ; ?>" class="img-responsive">
              </a>
              <h4><?php echo $title[$i] ; ?></h4>
              <div><p><?php echo $text[$i] ; ?></p></div>
              </div>
              <?php
          }
          ?>
        </section>     
      <?php endwhile; ?>
    </div>
  </div>
</div>
<!-- #content -->

<?php get_footer(); ?>