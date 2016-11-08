<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kariman
 */

?>

<article class="faq-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <header class="faq-header">
    <?php /*
    if ( is_single() ) :
      the_title( '<h1 class="_faq-title">', '</h1>' );
    else :
      the_title( '<center><h2 class="_faq-title"><a href="' . esc_url( get_permalink() ) . '" class="_faq-title" rel="bookmark">', '</a></h2></center>' );
    endif; */

    if ( 'post' === get_post_type() ) : ?>
    <!--<div class="entry-meta">
      <?php kariman_posted_on(); ?>
    </div>--><!-- .entry-meta -->
    <?php
    endif; ?>
  </header><!-- .entry-header -->

  <div class="_faq-content">
    <?php
      the_content( sprintf(
        /* translators: %s: Name of current post. */
        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'kariman' ), array( 'span' => array( 'class' => array() ) ) ),
        the_title( '<span class="screen-reader-text">"', '"</span>', false )
      ) );

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kariman' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <!-- TODO: THIS IS WHERE I WILL PUT THE READ MORE BUTTON -->
    <?php kariman_entry_footer(); ?>
  </footer><!-- .entry-footer -->
  
</article><!-- #post-## -->
