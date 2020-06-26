<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

 get_header(); ?>
	<div class="row">
		<div class="col-sm-8 blog-main">
			<?php get_template_part( 'content', get_post_format() ); ?>
		</div> <!-- /.blog-main -->
	</div> <!-- /.row -->
<?php get_footer(); ?>