<?php

/**
 *
 * 404.php
 *
 * The template for displaying 404 pages (Not Found).
 * Used when WordPress cannot find a post or page that matches the query.
 *
 * To change the error message:
 * 1. Open functions.php file
 * 2. Find the theme_404_content() function
 * 3. Change the error_message variable value
 *
 * Additional settings are available under the Appearance -> Theme Options -> Pages.
 *
 */

get_header(); ?>
<main class="clear">
  <div class="grid">
    <div class="col-large-4 col-wooser-3 nav-tier-bubble">
      <nav class="nav nav-tier">
        <ul>
          <li><a href="<?php echo home_url(); ?>">
              <svg class="symbol symbol-arrow-left">
                <use xlink:href="#arrow-left"></use>
              </svg><span><?php echo get_the_title();?></span></a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="col-large-8 col-wooser-9">
      <div class="main-content">
          <div class="hero hero--mask hero--default">
            <div class="compartment">
              <h1 class="hero__title">Error 404</h1>
            </div><?php the_post_thumbnail(); ?>
          </div>
        <div class="section">
          <div class="compartment">
            <div class="nav-tier-container">
              <button class="nav-tier-switch"> <span>Page Menu</span>
                  <svg class="symbol symbol-chevron-down">
                    <use xlink:href="#chevron-down"></use>
                  </svg>
              </button>
              <nav class="nav nav-tier nav-tier--clone">
                <ul>
                  <li><a href="<?php echo home_url(); ?>">
                      <svg class="symbol symbol-arrow-left">
                        <use xlink:href="#arrow-left"></use>
                      </svg><span><?php echo get_the_title();?></span></a>
                  </li>
                  <?php echo wpb_list_child_pages(); ?>
                </ul>
              </nav>
            </div>
            <p class="lead-in">
              <a href="<?php echo home_url(); ?>" class="Section-medium--bodyButton">Volver</a>
              <p>The page you are searching is not on the server.</p>
              <ul>
                  <li><a href="<?php echo home_url(); ?>">Option 1</a></li>
                  <li><a href="<?php echo home_url(); ?>">Option 2</a></li>
                  <li><a href="<?php echo home_url(); ?>">Option 3</a></li>
                  <li><a href="<?php echo home_url(); ?>">Option 4</a></li>
              </ul>
              <p><a href="<?php echo home_url(); ?>"><strong>Barcoding - Home</strong></a></p>
              <?php the_content(); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
