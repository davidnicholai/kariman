<?php /* Template Name: FAQ */

get_header(); ?>

  <div id="primary" class="content-area _faq-main">
    <main id="main" class="site-main" role="main">

      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content-faq', 'page' );

        

      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
