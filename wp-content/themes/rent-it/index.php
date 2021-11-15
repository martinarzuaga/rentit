<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rentit
 */
?>

<?php get_header(); ?>

<section class="row d-flex">
    <div class="col-md-8">
        <div class="row d-flex posts-blog">

            <?php
            //If there any post
            if (have_posts()) :
                // Load posts loop
                while (have_posts()) : the_post();
            ?>


                    <article class="col-md-6">
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