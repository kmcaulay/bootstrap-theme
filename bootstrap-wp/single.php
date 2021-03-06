<?php get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9">
          
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><?php the_title(); ?></h1>

            <?php 
                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true);
                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
              ?>
              <p class="featured-image"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta['alt']; ?>"></p>


            <p><em>
              By <?php the_author();?> 
              on <?php the_time('l, F, jS, Y');?>    
            </em></p>
          </div>

          <?php the_content(); ?>

        <?php endwhile; else: ?>

          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content to display!</p>

        <?php endif; ?>

        </div>
       
       <?php get_sidebar( 'blog' ); ?>
       
      </div>

  <?php get_footer(); ?>