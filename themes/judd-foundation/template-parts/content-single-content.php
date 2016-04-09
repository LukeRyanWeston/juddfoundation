<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package judd-foundation
 */

?>

<article id="post-<?php the_ID(); ?>" class="singleContent">

	<section class="page-content-area">
		<h1><?php the_title(); ?></h1>
		

		<?php the_field('location'); ?>
		<?php the_content(); ?>
	</section>

	<section class="right-sidebar">
    <?php

	$post_objects = get_field('sidebar_content_blocks');
	
	if( $post_objects ): ?>
		<ul>
		<?php foreach( $post_objects as $post):  ?>
			<?php setup_postdata($post); ?>
			<?php var_dump($post); ?>
			<li>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<a class="right-side-images" href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>"></a>
			</li>
		<?php endforeach; ?>
		</ul>
		<?php wp_reset_postdata();  ?>
	<?php endif; ?>
   </section>

</article>
