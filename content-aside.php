<?php
/**
 * @package AnnieDog
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="index-box">

			<header class="entry-header clear">

				<?php
				if (is_sticky()){
					echo '<i class="fa fa-bomb sticky-post"></i>'
}
					?>



			</header><!-- .entry-header -->


	<div class="entry-content">
		<?php the_content(); ?>

	</div><!-- .entry-content -->

		<footer class="entry-footer continue-reading">
		<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
						<?php annie_dog_posted_on(); ?>
						<?php
				    if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) {
				        echo '<span class="comments-link">';
				        comments_popup_link( __( 'Leave a comment', 'AnnieDog' ), __( '1 Comment', 'AnnieDog' ), __( '% Comments', 'AnnieDog' ) );
				        echo '</span>';
				    }
				?>
				<?php edit_post_link( __( 'Edit', 'annie-dog' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
    </footer><!-- .entry-footer -->
	</div><!-- .index-box -->
</article><!-- #post-## -->
