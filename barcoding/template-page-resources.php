<?php /* Template Name: Plantilla Resources */ ?>
<?php
the_post();
global $post;
get_header(); ?>
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
            <div class="filter">
              <div class="grid grid--20 filter__tools">
                <div class="col-aldnoah-6">
                    <div class="input-field">
                      <input type="text" placeholder="Search By Keyword">
                      <div class="input-hint input-hint--submit">
                        <input type="submit" class="input-hint__field">
                      </div>
                    </div>
                </div>
                <div class="col-small-6 col-aldnoah-3">
                    <div class="input-field">
                      <select>
                        <option value="By Industry">By Industry</option>
                        <option value="By Industry">By Industry</option>
                      </select><span class="input-hint input-hint--select"></span>
                    </div>
                </div>
                <div class="col-small-6 col-aldnoah-3">
                    <div class="input-field">
                      <select>
                        <option value="By Technology">By Technology</option>
                        <option value="By Technology">By Technology</option>
                      </select><span class="input-hint input-hint--select"></span>
                    </div>
                </div>
              </div>
              <div class="filter__extras">
                <p class="filter__result"> <em>13 of 300 results found for: <a href="">Health Care</a></em></p><a href="" class="filter__reset">
                    <svg class="symbol symbol-times">
                      <use xlink:href="#times"></use>
                    </svg><span>Reset Filter</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
