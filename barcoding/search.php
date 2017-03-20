<?php the_post(); ?>
<?php get_header(); ?>
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
              <h1 class="hero__title"><?php printf( __( 'Search results for:', 'Barcoding' ), '' . get_search_query() . '' ); ?></h1>
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
            <div class="flag">
              <h3>You Might Also Like...</h3>
            </div>
            <div class="grid">
              <div class="col-gamagori-4">
                <div class="callout callout--orange"><a href="" class="callout__details">
                    <h3 class="mini">Whitepapers</h3>
                    <h2 class="stay">Asset, Patient Tracking Technology Jockeys for Bottom-line Position.</h2></a>
                    <div class="callout__share">
                      <h3 class="mini"><span>Share +</span></h3>
                      <nav class="nav nav-social">
                        <ul>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-pinterest">
                                    <use xlink:href="#pinterest"></use>
                                  </svg></span><span class="visible-for-screen-readers">Pinterest</span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-google">
                                    <use xlink:href="#google"></use>
                                  </svg></span><span class="visible-for-screen-readers">Google+</span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-linkedin">
                                    <use xlink:href="#linkedin"></use>
                                  </svg></span><span class="visible-for-screen-readers">linkedin</span></a></li>
                          <li><a href="" target="_blank"> <span class="bottle">
                                  <svg class="symbol symbol-twitter">
                                    <use xlink:href="#twitter"></use>
                                  </svg></span><span class="visible-for-screen-readers">Twitter   </span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-facebook">
                                    <use xlink:href="#facebook"></use>
                                  </svg></span><span class="visible-for-screen-readers">Facebook</span></a></li>
                        </ul>
                      </nav>
                    </div>
                </div>
              </div>
              <div class="col-gamagori-4">
                <div class="callout callout--gray"><a href="" class="callout__details">
                    <h3 class="mini">Events</h3>
                    <h2 class="stay">Annual Barcoding, Inc. Executive Forum</h2>
                    <h2 class="stay">9.12.16</h2></a>
                    <div class="callout__share">
                      <h3 class="mini"><span>Share +</span></h3>
                      <nav class="nav nav-social">
                        <ul>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-pinterest">
                                    <use xlink:href="#pinterest"></use>
                                  </svg></span><span class="visible-for-screen-readers">Pinterest</span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-google">
                                    <use xlink:href="#google"></use>
                                  </svg></span><span class="visible-for-screen-readers">Google+</span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-linkedin">
                                    <use xlink:href="#linkedin"></use>
                                  </svg></span><span class="visible-for-screen-readers">linkedin</span></a></li>
                          <li><a href="" target="_blank"> <span class="bottle">
                                  <svg class="symbol symbol-twitter">
                                    <use xlink:href="#twitter"></use>
                                  </svg></span><span class="visible-for-screen-readers">Twitter   </span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-facebook">
                                    <use xlink:href="#facebook"></use>
                                  </svg></span><span class="visible-for-screen-readers">Facebook</span></a></li>
                        </ul>
                      </nav>
                    </div>
                </div>
              </div>
              <div class="col-gamagori-4">
                <div class="callout callout--blue"><a href="" class="callout__details">
                    <h3 class="mini">Events</h3>
                    <h2 class="stay">Annual Barcoding, Inc. Executive Forum</h2>
                    <h2 class="stay">9.12.16</h2></a>
                    <div class="callout__share">
                      <h3 class="mini"><span>Share +</span></h3>
                      <nav class="nav nav-social">
                        <ul>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-pinterest">
                                    <use xlink:href="#pinterest"></use>
                                  </svg></span><span class="visible-for-screen-readers">Pinterest</span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-google">
                                    <use xlink:href="#google"></use>
                                  </svg></span><span class="visible-for-screen-readers">Google+</span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-linkedin">
                                    <use xlink:href="#linkedin"></use>
                                  </svg></span><span class="visible-for-screen-readers">linkedin</span></a></li>
                          <li><a href="" target="_blank"> <span class="bottle">
                                  <svg class="symbol symbol-twitter">
                                    <use xlink:href="#twitter"></use>
                                  </svg></span><span class="visible-for-screen-readers">Twitter   </span></a></li>
                          <li><a href="" target="_blank"><span class="bottle">
                                  <svg class="symbol symbol-facebook">
                                    <use xlink:href="#facebook"></use>
                                  </svg></span><span class="visible-for-screen-readers">Facebook</span></a></li>
                        </ul>
                      </nav>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- <p><?//php if ( have_posts() ) : ?>
    <?//php while (have_posts()) : the_post(); ?>
    <?//php include (TEMPLATEPATH . "/loop.php"); ?>
    <?//php endwhile; ?>
    <div class="next_back">
    <?//php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
    <div class="back_left"><?//php next_posts_link('Next &raquo;') ?></div>
    <div class="next_right"><?//php previous_posts_link('&laquo; Before ') ?></div>
    <?//php } ?>

    <?//php else : ?>
    <p><?//php _e( 'Nothing matched your search terms', 'Barcoding' ); ?></p>

    <p><?//php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Barcoding' ); ?></p>
    <?//php endif; ?>
</p>
<?//php global $post; $thisPost = $post->ID; if ( get_post_meta($thisPost, 'IDCategory', true) != null ) {
//$IDCategory = (get_post_meta($thisPost, 'IDCategory', true));
//if( is_numeric( $IDCategory ) ){
  //  fnc_ArbolCat( $IDCategory );
//}
//}
?> -->
<?php get_footer(); ?>
