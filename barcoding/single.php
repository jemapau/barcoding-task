<?php the_post(); ?>
<?php get_header(); ?>
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
              <h1 class="hero__title"><?php echo get_the_title(); ?></h1>
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
              <?php the_content(); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
