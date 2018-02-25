<?php /* Template Name: Home Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>



		</section>
    <section >
      <div class="container">

<div class="row">
  <div class="col-sm-4">
      <div class="title_posting">

				<div class="title_section">
					<?php echo get_cat_name( $category_id = 4 );?>
				</div>

        <hr>
      </div>
      <div class="post_feld">
				<?php
				$args = array('category' => 9);
		// the query
		$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=> -1)); ?>

		<?php if ( $wpb_all_query->have_posts() ) : ?>


			<ul>
	    <?php
	    $args = array('category' => 4);
// ,'posts_per_page' => 1
	    $myposts = get_posts( $args );
	    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<li class="list_cleaning">
				<div class="title_fixing">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
				</div>

					<div class="img_thumb_nail">
						<?php the_post_thumbnail(); ?>

					</div>

					<div class="par_home">
						<?php the_excerpt(); ?>
					</div>

				</a>
			</li>
	    <?php endforeach;
	    wp_reset_postdata();?>


	    </ul>

		    <?php wp_reset_postdata(); ?>

		<?php else : ?>
		    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
      </div>


  </div>
	<div class="col-sm-4">
    <div class="post_bording">
      <div class="title_posting">

				<div class="title_section">

						<?php echo get_cat_name( $category_id = 6 );?>
				</div>

        <hr>
      </div>
      <div class="post_feld">
				<?php
		// the query
		$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

		<?php if ( $wpb_all_query->have_posts() ) : ?>

			<ul>
			<?php
			$args = array('category' => 6 );
// ,'posts_per_page' => 1
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<li class="list_cleaning">
				<div class="title_fixing">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
				</div>

					<div class="img_thumb_nail">
						<?php the_post_thumbnail(); ?>

					</div>

					<div class="par_home">
						<!-- <?php the_excerpt(); ?> -->
						<div class="embed-responsive embed-responsive-16by9">
  <?php the_content() ?>
</div>

					</div>

				</a>
			</li>
			<?php endforeach;
			wp_reset_postdata();?>


			</ul>
		    <?php wp_reset_postdata(); ?>

		<?php else : ?>
		    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
      </div>
    </div>

  </div>
<div class="col-sm-4">
	<div class="post_bording_right">
		<div class="title_poting">
<div class="title_section">
<?php echo get_cat_name( $category_id = 5 );?>
</div>

			<hr>
		</div>
		<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>

	<ul>
	<?php
	$args = array('category' => 5 );

// ,'posts_per_page' => 1
	$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<li class="list_cleaning">
		<div class="title_fixing">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
		</div>

			<div class="img_thumb_nail">
				<?php get_the_category() ?>
				<?php the_post_thumbnail(); ?>

			</div>

			<div class="par_home">
				<?php the_excerpt(); ?>
			</div>

		</a>
	</li>
	<?php endforeach;
	wp_reset_postdata();?>


	</ul>
		<?php wp_reset_postdata(); ?>

<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
	</div>
  </div>
  </div>

  </div>


    </section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
