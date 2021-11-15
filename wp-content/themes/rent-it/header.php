<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RentIt
 */

?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<header class="navbar navbar-expand-md">
    <a href="/" class="navbar-brand">
        <img class="img-fluid logo-img" src="<?php echo get_template_directory_uri() ?>/assets/img/Rentit-logo.png" alt="rentit-logo">
    </a>

    <?php
    $args = array(
        'theme_location' => 'menu-main',
        'container' => 'nav',
        'container_class' => 'd-flex flex-column',
        'menu_class' => 'nav justify-content-center'
    );
    wp_nav_menu($args);
    ?>
</header>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>