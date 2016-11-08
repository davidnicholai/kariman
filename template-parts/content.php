<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kariman
 */

?>

<article class="_article-master-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="_article-date-container">
		<table>
			<tr><!-- Singit NOV 2016 here -->
				<td style="text-align: center; font-size: 14px; padding-top: 8px"><?php kariman_posted_on_month_year(); ?></td>
			</tr>
			<tr><!-- Singit day here -->
				<td style="text-align: center; font-size: 48px; padding-top: 0px"><?php kariman_posted_on_day(); ?></td>
			</tr>
		</table>
	</div>

	<div class="_article-container">
		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<center><h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" class="_article-title" rel="bookmark">', '</a></h2></center>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<!--<div class="entry-meta">
				<?php kariman_posted_on(); ?>
			</div>--><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( '<span class="_post-read-more">READ MORE</span>', 'kariman' ), array( 'span' => array( 'class' => array() ) ) ),
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
	</div>

	<div class="_article-mema-container">
	</div>
	
</article><!-- #post-## -->
