<?php /* Template Name: about Template */ get_header(); ?>

<main role="main">
<!-- section -->
<section>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <!-- article -->
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- post thumbnail -->
    <!-- <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_post_thumbnail(); // Fullsize image for the single post ?>
      </a>
    <?php endif; ?> -->
    <!-- /post thumbnail -->

    <!-- post title -->

    <div class="row">
      <div class="col-sm-5">


      </div>
      <div class="col-sm-7">
        <h1>
          about me
        </h1>

      </div>

    </div>
    <div class="row">
      <div class="col-sm-4">


      </div>
      <div class="col-sm-3 context_single">
        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
          <!-- <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> -->
            <!-- <?php the_post_thumbnail(); // Fullsize image for the single post ?> -->
          <!-- </a> -->
        <?php endif; ?>

      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">


      </div>
      <div class="col-sm-5 context_single">
        <?php the_post_thumbnail(); ?>

      </div>
    </div>
    <!-- /post title -->
    <div class="row">
      <div class="col-sm-2">


      </div>
      <div class="col-sm-7 context_single">
<?php the_content(); // Dynamic Content ?>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>




    <!-- <?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?> -->

    <!-- <p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p> -->

    <!-- <p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p> -->

    <!-- <?php edit_post_link(); // Always handy to have Edit Post Links available ?> -->



  </article>
  <!-- /article -->

<?php endwhile; ?>

<?php else: ?>

  <!-- article -->
  <article>

    <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

  </article>
  <!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->
</main>


<?php get_footer(); ?>
