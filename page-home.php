<?php
/**
 * Template Name: Home Page
 *
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
<?php $bcimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<?php endif; ?>

<div id="content" class="page-intro color-blu-bg page bc-home" role="main">
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
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <!-- .entry-content --> 
        </article>     
      </div>
      <div class="col-md-6 col-lg-6">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		<li data-target="#carousel-example-generic" data-slide-to="4"></li>
          </ol>

          <!-- Wrapper for slides -->
         <?php  $args = array(
            'post_parent'    => $post->ID,
            'post_type'      => 'attachment',
            'numberposts'    => 5, // show all
            'post_status'    => 'any',
            'post_mime_type' => 'image',
            'orderby'        => 'menu_order',
            'order'           => 'ASC'
          );

          $images = get_posts($args);
          if($images) { ?>
          <?php $i=0 ?>
          <div class="carousel-inner" role="listbox">
            <?php foreach($images as $image) { ?>
            <?php $i++ ?>
            <div class="item <?php if ($i==1) { echo 'active'; } ?>">
              <img src="<?php echo wp_get_attachment_url($image->ID); ?>" alt="">
            </div>  
            <?php } ?>
          </div> 
          <?php } ?>
        

          <!-- Wrapper for slides 
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg" alt="Award">
            </div>
            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/slide2.jpg" alt="Award">
            </div>
            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/slide3.jpg" alt="Award">
            </div>     
            <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="http://placehold.it/555x555?text=slide+1" alt="">
            </div>
            <div class="item">
              <img src="http://placehold.it/555x555?text=slide+2" alt="">
            </div>
            <div class="item">
              <img src="http://placehold.it/555x555?text=slide+3" alt="">
            </div>     
         </div> 
         </div> -->
          
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<!-- #content -->

<?php get_footer(); ?>