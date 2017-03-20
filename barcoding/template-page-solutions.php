<?php /* Template Name: Plantilla Solutions */ ?>
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
            <div class="silk-harmonica silk-harmonica--expanded silk-harmonica--solutions">
              <!--ASSET TRACKING -->
              <?php  $args = array( 'post_type' => 'solutions', 'posts_per_page' => 4 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                    echo '<header role="tab" class="silk-harmonica__header">';
                    echo '<h6>';
                      the_title();
                    echo '</h6>';
                    echo '<h5>';
                    echo '<span>';
                      the_title();
                    echo '</span>';
                    echo '<svg class="symbol symbol-chevron-down"><use xlink:href="#chevron-down"></use></svg>';
                    echo '</h5>';
                    echo '<figure>';
                    the_post_thumbnail( '' );
                    echo '</figure>';
                    echo '</header>';
                    echo '<article role="tabpanel" class="silk-harmonica__content">';
                      the_content();
                    echo '<div class="solution__footer">';
                    echo '<h4><a href="">';
                    echo '<svg class="symbol symbol-plane"><use xlink:href="#plane"></use></svg>';
                      the_excerpt();
                    echo '</a></h4>';
                    echo '</div>';
                    echo '</article>';
                endwhile; ?>
            </div> <!-- END OF TABS -->
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
<?php get_footer(); ?>
