        <footer class="site__footer">
          <div class="lace clear"><a href="<?php echo home_url(); ?>" class="site__logo">Barcoding</a>
            <nav class="nav nav-social">
              <ul>
                <li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>" target="_blank"><span class="bottle">
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
                <li><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" target="_blank"> <span class="bottle">
                        <svg class="symbol symbol-twitter">
                          <use xlink:href="#twitter"></use>
                        </svg></span><span class="visible-for-screen-readers">Twitter   </span></a></li>
                <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank"><span class="bottle">
                        <svg class="symbol symbol-facebook">
                          <use xlink:href="#facebook"></use>
                        </svg></span><span class="visible-for-screen-readers">Facebook</span></a></li>
              </ul>
            </nav>
          </div>
          <div class="sole clear">
            <div class="tread">
              <nav class="nav nav-secondary-main">
                <?php wp_nav_menu( array(
                  'theme_location' => 'main-menu',
                  'container' => 'false',
                ) ); ?>
              </nav>
            </div>
            <div class="tread">
              <nav class="nav nav-bulleted nav-action">
                <?php wp_nav_menu( array( 'theme_location' => 'contact-menu' ) ); ?>
              </nav>
              <nav class="nav nav-bulleted nav-legal">
                <?php wp_nav_menu( array( 'theme_location' => 'legal-menu' ) ); ?>
              </nav>
            </div>
          </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
