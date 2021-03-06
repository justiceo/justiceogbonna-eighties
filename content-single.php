<?php
/**
 * @package Eighties
 * @author Justin Kopepasah
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	

	<header class="entry-header">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'eighties' ) );
			if ( $categories_list && eighties_categorized_blog() ) :
		?>
			
		<?php endif; ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p class="entry-meta entry-meta-time"><i class="fa fa-clock-o"></i><?php echo eighties_get_time_difference( get_the_date( 'Y-m-d H:i:s' ) ); ?></p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'eighties' ),
				'after'  => '</div>',
			) );
		?>
        <span class="entry-meta entry-meta-categories"><?php echo $categories_list; ?></span>
	</div><!-- .entry-content -->
    

	<?php the_tags( '<footer class="entry-footer"><div class="entry-meta entry-meta-tags">', ' ', '</div></footer><!-- .entry-footer -->' ); ?>
</article><!-- #post-## -->
