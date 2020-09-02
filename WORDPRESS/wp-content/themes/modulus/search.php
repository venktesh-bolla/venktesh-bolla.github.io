<?php
/**
 * The template for displaying search results pages.
 *
 * @package modulus
 */

get_header(); ?>
<?php $breadcrumb = get_theme_mod( 'breadcrumb',true ); ?>    
		<div class="breadcrumb">
				<div class="container">
					<div class="breadcrumb-left eight columns">
						<?php the_title('<h4>','</h4>');?>			
					</div>
					<?php if( $breadcrumb ) : ?>
						<div class="breadcrumb-right eight columns">
							<?php modulus_breadcrumbs(); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			
<div id="content" class="site-content">
		<div class="container">

        <?php $sidebar_position = get_theme_mod( 'sidebar_position', 'right' ); ?>
		<?php if( 'left' == $sidebar_position ) :?>
			<?php get_sidebar('left'); ?>
		<?php endif; ?>  
		
	<section id="primary" class="content-area eleven columns">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'modulus' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

		
	<?php 
		if(  get_theme_mod ('numeric_pagination',true) && function_exists( 'webulous_pagination' ) ) : 
				webulous_pagination();
			else :
				modulus_post_nav();     
			endif; 
	?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

      <?php if( 'right' == $sidebar_position ) :?>
			<?php get_sidebar(); ?>
		<?php endif; ?>
<?php get_footer(); ?>
