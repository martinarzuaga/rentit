<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RentIt
 */

?>

</main>

<footer class="container-xl">
    <section class="row">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-footer-left',
                'container' => 'nav',
                'container_class' => 'col-md-4',
                'menu_class' => 'nav d-flex flex-column'
            )
        )
        ?>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-footer-middle',
                'container' => 'nav',
                'container_class' => 'col-md-4',
                'menu_class' => 'nav d-flex flex-column'
            )
        )
        ?>
        <nav class="col-md-4 d-flex justify-content-around">
            <a href="https://facebook.com">Facebook</a>
            <a href="https://whatsapp.com">Whatsapp</a>
            <a href="https://instagram.com">Instagram</a>
        </nav>
    </section>
</footer>

<?php wp_footer(); ?>

</body>

</html>