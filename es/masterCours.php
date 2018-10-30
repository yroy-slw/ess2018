<?php 
/*
Template Name: Modele master cours
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
				<p><?php the_field("sous_titre_de_la_page"); ?></p>
				<a class="button" href="https://yannroy.com/es2018/tarifs/">Aller au tarifs</a>
			</div>
		</section>
		<div class="fond" style="background: url(<?php the_field('banner'); ?>); background-size: cover; background-position: center;"></div>

		<div class="bgPage spaceTop extandMobile" id="sectionTop" <?php live_edit('blocks'); ?>>
			<div class="inner">
				<?php $i=0; while ( have_rows('blocks') ) : the_row(); $i++; ?>
				<?php endwhile; ?>
				<section class="shortCuts col-<?php echo $i; ?>">
					<?php $i=0; while ( have_rows('blocks') ) : the_row(); $i++; ?>
					<article data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00" data-aos-once="true">
						<img src="<?php the_sub_field('image'); ?>" alt="">
						<div class="content scrollTo">
							<h2><?php the_sub_field("titre"); ?></h2>
							<p><?php the_sub_field("texte"); ?></p>
							<?php 
								$call = get_sub_field("call_to_action_texte"); 
								if($call) { ?>
									<a href="#link-<?php echo $i; ?>" class="button">
										<?php the_sub_field("call_to_action_texte"); ?>
									</a>
								<?php }
							?>
						</div>
					</article>
					<?php endwhile; ?>
				</section>

				<section class="contents" <?php live_edit('contenus'); ?>>
					<?php $i=0; while ( have_rows('contenus') ) : the_row(); $i++; ?>
					<article id="link-<?php echo $i; ?>" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00" data-aos-once="true" class="display<?php echo $i; ?>" style="background: url(<?php the_sub_field("image"); ?>); background-size: cover; background-position: center;">
		
						<div class="contentLeft">
							<h2><?php the_sub_field("titre"); ?></h2>
							<p><?php the_sub_field("texte"); ?></p>
						</div>

						<div class="contentRight">
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

<?php get_footer(); ?>