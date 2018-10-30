<?php 
/*
Template Name: Modele cours
*/ 
?>

<?php get_header(); ?>

<style type="text/css">
	footer {
		
	}
</style>
	<div class="content">

		<section class="pageTitle" <?php live_edit('titre_de_la_page, sous_titre_de_la_page, banner'); ?>>
			<div class="content">
				<h1><?php the_field("titre_de_la_page"); ?></h1>
				<p><?php the_field("sous_titre_de_page"); ?></p>
				<a class="button" href="https://yannroy.com/es2018/tarifs/">Aller au tarifs</a>
			</div>
		</section>
		<div class="fond" style="background: url(<?php the_field('banner'); ?>); background-size: cover; background-position: center;"></div>

		<div class="bgPage spaceTop extandMobile" id="sectionTop" <?php live_edit('blocks'); ?>>
			<div class="inner">
				<?php $n=0; while ( have_rows('blocks') ) : the_row(); $n++; ?><?php endwhile; ?>
				<section class="shortCuts">
					<?php $i=0; while ( have_rows('blocks') ) : the_row(); $i++; ?>
					<article data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00" data-aos-once="true" class="a<?php echo $n; ?>col">
						<img src="<?php the_sub_field('image'); ?>" alt="">
						<div class="content">
							<h2><?php the_sub_field("titre"); ?></h2>
							<p><?php the_sub_field("texte"); ?></p>
							<?php 
								$call = get_sub_field("call_to_action_texte"); 
								if($call) { ?>
									<a href="<?php the_sub_field('call_to_action'); ?>" class="button">
										<?php the_sub_field("call_to_action_texte"); ?>
									</a>
								<?php }
							?>
						</div>
					</article>
					<?php endwhile; ?>
				</section>
			</div>
		</div>

		<div class="contentPage" <?php live_edit('galerie_dimages'); ?>>

			<div class="team" <?php live_edit('texte_page'); ?>>
				<?php if(get_field("texte_page")) { ?>
					<div class="wysiwyg single Spacer">
						<?php the_field("texte_page"); ?>
					</div>
				<?php } ?>
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
		</div>

<?php get_footer(); ?>