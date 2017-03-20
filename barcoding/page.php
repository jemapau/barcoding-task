<?php /* Template Name: Plantilla Page */ ?>
<?php
get_header();
the_post();
global $post;
?>
<main class="clear">
  <div class="grid">
    <div class="col-large-4 col-wooser-3 nav-tier-bubble">
      <nav class="nav nav-tier">
        <ul>
          <li><a href="<?php echo get_permalink($post->post_parent); ?>">
              <svg class="symbol symbol-arrow-left">
                <use xlink:href="#arrow-left"></use>
              </svg><span><?php echo get_the_title( $post->post_parent );?></span></a>
          </li>
          <?php echo wpb_list_child_pages(); ?>
        </ul>
      </nav>
    </div>
    <div class="col-large-8 col-wooser-9">
      <div class="main-content">
        <div class="hero hero--mask hero--default">
          <div class="compartment">
            <h1 class="hero__title"><?php the_title(); ?></h1>
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
                <li><a href="<?php echo get_permalink($post->post_parent); ?>">
                    <svg class="symbol symbol-arrow-left">
                      <use xlink:href="#arrow-left"></use>
                    </svg><span><?php echo get_the_title( $post->post_parent );?></span></a>
                </li>
                <?php echo wpb_list_child_pages(); ?>
              </ul>
            </nav>
          </div>
          <p class="lead-in">
            <?php echo get_the_excerpt(); ?>
          </p>
          <?php the_content();?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
