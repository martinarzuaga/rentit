<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<?php get_header(); ?>

  <section class="row d-flex">
    <div class="col-xl">
      <div class="row d-flex posts-blog">

        <?php
        //If there any post
        if (have_posts()) :
          // Load posts loop
          while (have_posts()) : the_post();
            ?>


            <article class="col-md-8">
              <h2> <?php the_title(); ?> </h2>
              <div> <?php the_content(); ?> </div>
            </article>


          <?php
          endwhile;
        else : echo "<p>Nothing to display.</p>";
        endif
        ?>

      </div> <!-- row d-flex posts-blog -->
    </div> <!-- /.row -->
  </section> <!-- section row d-flex -->

<?php get_footer(); ?>