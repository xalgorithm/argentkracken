<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BlogSixteen
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php blogsixteen_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_excerpt( sprintf(
		/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'blogsixteen' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogsixteen' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<?php
	$args = array(
		'post_type' => 'costuming', // enter custom post type
		'orderby' => 'date',
		'order' => 'DESC',
	);

	$loop = new WP_Query( $args );
	if( $loop->have_posts() ):
		while( $loop->have_posts() ): $loop->the_post(); global $post;
			echo '<div class="costuming">';
			echo '<h3>' . get_the_title() . '</h3>';
			echo '<div class="costuming-image">'. get_the_post_thumbnail( $id ).'</div>';
			echo '<div class="costuming-work">'. get_the_content().'</div>';
			echo '</div>';
		endwhile;
	endif;
	?>
</article><!-- #post-## -->
