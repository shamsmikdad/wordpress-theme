<?php

$dir= get_template_directory_uri();
get_header();
?>

	<main>
	<div id="main-banner">
      <img src="<?php echo $dir?>/images/banner.jpg" alt="Welcome to Resto" />
    </div>

    <div class="wrapper">
      <section id="home-menu">
        <h2>Menu</h2>
        <ul>
          <?php while (have_posts( )): the_post( );?>
          <?php endwhile ?>
          <li>
            <span class="dish">Voluptate Cillum fugiat</span>
            <span class="price">$30</span>
            <span class="description">Cheese, tomato, mushrooms, onions</span>
          </li>
          <li>
            <span class="dish">Voluptate Cillum fugiat</span>
            <span class="price">$30</span>
            <span class="description">Cheese, tomato, mushrooms, onions</span>
          </li>
          <li>
            <span class="dish">Voluptate Cillum fugiat</span>
            <span class="price">$30</span>
            <span class="description">Cheese, tomato, mushrooms, onions</span>
          </li>
          <li>
            <span class="dish">Voluptate Cillum fugiat</span>
            <span class="price">$30</span>
            <span class="description">Cheese, tomato, mushrooms, onions</span>
          </li>
          <li>
            <span class="dish">Voluptate Cillum fugiat</span>
            <span class="price">$30</span>
            <span class="description">Cheese, tomato, mushrooms, onions</span>
          </li>
          <li>
            <span class="dish">Voluptate Cillum fugiat</span>
            <span class="price">$30</span>
            <span class="description">Cheese, tomato, mushrooms, onions</span>
          </li>
          <li>
            <span class="dish">Voluptate Cillum fugiat</span>
            <span class="price">$30</span>
            <span class="description">Cheese, tomato, mushrooms, onions</span>
          </li>
          <li>
            <span class="dish">Voluptate Cillum fugiat</span>
            <span class="price">$30</span>
            <span class="description">Cheese, tomato, mushrooms, onions</span>
          </li>
        </ul>
      </section>

      <section id="featured">
        <ul>
        <?php while (have_posts( )): the_post( );
	      $price = get_post_meta( get_the_ID(), 'price', true);
	      $stars = get_post_meta( get_the_ID(), 'stars', true);?>

          <li>
            <?php the_post_thumbnail();?> 
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
            <span><?php echo $price; ?></span>
            <span class="rating star-<?php echo $stars ?>"></span>

          </li>
          <?php endwhile ?>
        </ul>
      </section>
    </div>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
