<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
	<header>
	<div class="wrapper">
        <h1 class="logo">Resto</h1>
        <nav>
          <h2>Main Navigation</h2>
          <ul>
            <li><a href="">Our Story</a></li>
            <li><a href="">Menu</a></li>
            <li><a href="">Reservations</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Reviews</a></li>
          </ul>
        </nav>
      </div>
	</header><!-- #masthead -->
