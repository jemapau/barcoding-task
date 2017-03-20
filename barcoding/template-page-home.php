<?php /* Template Name: Plantilla Home */ ?>
<?php get_header(); ?>
    <main class="clear">
      <div class="video-bubble hero halfway-section">
        <div class="compartment">
          <div class="video__details">
            <h1 class="larger">Capture a Stronger Supply Chain.</h1>
            <p>From basic barcode labels to enterprise-wide solutions, our team takes the time to learn about your unique business needs. Then we develop, deploy and manage cost-effective solutions that let you sleep better at night and <strong>make your customers smile.</strong></p><a href="" class="button button--inverse full-width">Ask a Question</a><a href="" class="button button--inverse full-width">Request a Quote</a><a href="" class="button button--inverse full-width">Shop Now</a>
          </div>
        </div><!--<img src="./assets/images/hero.jpg" alt="undefined">-->
        <?php get_custom_header(); ?>
      </div>
      <ul class="swift-slide product-slide halfway-section">
        <li class="hero product">
          <div class="compartment">
            <div class="product__details">
              <h2 class="larger">Slide 1</h2>
              <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo.</p><a href="" class="button">Read More</a>
            </div>
          </div><img src="./assets/images/honeywell.jpg" alt="undefined">
        </li>
        <li class="hero product">
          <div class="compartment">
            <div class="product__details">
              <h2 class="larger">Slide 2</h2>
              <p>Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p><a href="" class="button">Read More</a>
            </div>
          </div><img src="./assets/images/honeywell.jpg" alt="undefined">
        </li>
        <li class="hero product">
          <div class="compartment">
            <div class="product__details">
              <h2 class="larger">Slide 3</h2>
              <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit.</p><a href="" class="button">Read More</a>
            </div>
          </div><img src="./assets/images/honeywell.jpg" alt="undefined">
        </li>
      </ul>
      <div class="halfway-section">
        <ul class="partners">
        <?php  $args = array( 'post_type' => 'gallery', 'posts_per_page' => 10 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
            echo '<li class="partners__title">';
            echo '<h2 class="stay"">';
              the_title();
            echo '</h2>';
            echo '</li>';
              the_content();
          endwhile; ?>
        </ul>
        <div class="bubble bubble--big bubble--white">
          <div class="compartment">
            <div class="blockquote-bubble clear">
              <?php  $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 1 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                    echo '<figure class="shifted-asset shifted-asset--left">';
                    the_post_thumbnail( '' );
                    echo '</figure>';
                    echo '<figcaption>';
                    echo '</figcaption>';
                    echo '<div class="block-out">';
                    echo '<blockquote>';
                      the_content();
                    echo '<cite>';
                      the_title();
                    echo '</cite>';
                    echo '</blockquote>';
                    echo '</div>';
                endwhile; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="grid halfway-section">
        <div class="col-aldnoah-6">
        <?php  $args = array( 'category_name' => 'blog', 'posts_per_page' => 1 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
            echo '<div class="callout callout--blue callout--larger hero">';
            echo '<a href="" class="callout__details">';
            echo '<h3 class="mini"> Blog';
            echo '</h3>';
            echo '<h2 class="larger">';
            the_title();
            echo '</h2>';
            the_content();
            echo '</a>';
            echo '<div class="callout__share"><h3 class="mini"><span>Share +</span></h3>';
            echo '</div>';
            the_post_thumbnail( '' );
            echo '</div>';
          endwhile; ?>
        </div>
        <div class="col-aldnoah-6">
          <div class="grid">
            <div class="col-medium-6">
              <?php  $args = array( 'category_name' => 'whitepapers', 'posts_per_page' => 1 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                  echo '<div class="callout callout--orange">';
                  echo '<a href="" class="callout__details">';
                  echo '<h3 class="mini"> Whitepapers';
                  echo '</h3>';
                  echo '<h2 class="larger">';
                  the_title();
                  echo '</h2>';
                  echo '</a>';
                  echo '<div class="callout__share"><h3 class="mini"><span>Share +</span></h3>';
                  echo '</div>';
                  echo '</div>';
                endwhile; ?>
            </div>
            <div class="col-medium-6">
              <?php  $args = array( 'category_name' => 'events', 'posts_per_page' => 1 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                  echo '<div class="callout callout--gray">';
                  echo '<a href="" class="callout__details">';
                  echo '<h3 class="mini"> Events';
                  echo '</h3>';
                  echo '<h2 class="larger">';
                  the_title();
                  echo '</h2>';
                  echo '</a>';
                  echo '<div class="callout__share"><h3 class="mini"><span>Share +</span></h3>';
                  echo '</div>';
                  echo '</div>';
                endwhile; ?>
            </div>
            <div class="col-flush">
              <?php  $args = array( 'category_name' => 'featured-partner', 'posts_per_page' => 1 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                  echo '<div class="callout callout--dark-blue callout--featured">';
                  echo '<a href="" class="callout__details">';
                  echo '<h3 class="mini"> Feature Partners';
                  echo '</h3>';
                  echo '<div class="callout__logo">';
                  the_post_thumbnail( 'full' );
                  echo '</div>';
                  echo '<h2 class="larger">';
                  echo '</h2>';
                  the_content();
                  echo '</a>';
                  echo '<div class="callout__share"><h3 class="mini"><span>Share +</span></h3>';
                  echo '</div>';
                  echo '</div>';
                endwhile; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="halfway-section">
        <div class="social-feeds">
          <div class="compartment">
            <ul>
              <li><a href="" target="_blank" class="social__bubble social__bubble--facebook">
                  <div class="social__icon">
                      <svg class="symbol symbol-facebook">
                        <use xlink:href="#facebook"></use>
                      </svg>
                  </div></a>
                <?php if ( is_active_sidebar( 'facebook-feed-widget' ) ) : ?>
                  <?php dynamic_sidebar( 'facebook-feed-widget' ); ?>
                <?php endif; ?>
                <!--<p>Could #‎hyperloop‬ systems replace trucks and rail for cargo <strong>‪#‎transportation‬</strong>?</p>-->
              </li>
              <li><a href="" target="_blank" class="social__bubble social__bubble--twitter">
                  <div class="social__icon">
                      <svg class="symbol symbol-twitter">
                        <use xlink:href="#twitter"></use>
                      </svg>
                  </div></a>
                  <?php if ( is_active_sidebar( 'twitter-feed-widget' ) ) : ?>
                    <?php dynamic_sidebar( 'twitter-feed-widget' ); ?>
                  <?php endif; ?>

              </li>
              <li><a href="" target="_blank">
              <?php if ( is_active_sidebar( 'social-feed-widget' ) ) : ?>
                <?php dynamic_sidebar( 'social-feed-widget' ); ?>
              <?php endif; ?></a></li>
            </ul>
          </div>
        </div>
        <div class="sign-up">
          <div class="compartment">
            <div class="sign-up__bubble">
              <h2>Sign up for our newsletter:</h2>
              <div class="sign-up__form">
                <input type="text" placeholder="Email Address">
                <input type="submit" value="Sign Up" class="button">
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>
