<?php 
/*
Template Name: Modele page texte
*/ 
?>

<?php get_header(); ?>

<style type="text/css">
	footer {
		
	}
</style>
	<div class="content">

		<section class="pageTitle" <?php live_edit('titre_de_la_page, sous-titre_de_la_page, banner'); ?>>
			<div class="content">
				<h1><?php the_field("titre_de_la_page"); ?></h1>
				<p><?php the_field("sous-titre_de_la_page"); ?></p><br/><br/><br/><br/>
				<a class="button" href="https://yannroy.com/es2018/tarifs/">Tarifs</a>
			</div>
		</section>
		<div class="fond" style="background: url(<?php the_field('banner'); ?>); background-size: cover; background-position: center;"></div>

		<div class="bgPage spaceTop moreSpace" id="sectionTop">
			<div class="inner">
			</div>
		</div>

		<div class="contentPage extend">
			<div class="team" <?php live_edit('texte'); ?>>
				<div class="wysiwyg <?php if (is_page( 263 )) { echo 'single'; } ?>">
					<?php the_field("texte"); ?>
				</div>
			</div>
			<?php if(get_field("video")) { ?>
			<section class="gallery">
				<div class="top">
					<img src="<?php bloginfo('template_url'); ?>/images/image-video.svg" alt="Galerie d'images">
				</div>
				<div class="embed">
					<?php the_field("video"); ?>
				</div>
			</section>
			<?php } ?>
			<?php if(get_field("galerie_dimages")) { ?>
			<section class="gallery">
				<div class="top">
					<img src="<?php bloginfo('template_url'); ?>/images/banner-gallery.svg" alt="Galerie d'images">
				</div>
				<!-- Swiper -->
				<div class="swiper-container">
    				<div class="swiper-wrapper">
    					<?php while ( have_rows('galerie_dimages') ) : the_row(); ?>
      						<div class="swiper-slide">
      							<img src="<?php the_sub_field('image'); ?>" alt="Galerie d'images">
      						</div>
      					<?php endwhile; ?>
    				</div>
    				<!-- Add Pagination -->
    				<div class="swiper-pagination"></div>
				</div>
			</section>
		<?php } ?>
		</div>

<?php get_footer(); ?>