<?php 
/*
Template Name: Modele team
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

		<div class="bgPage spaceTop" id="sectionTop">
			<div class="inner">
			</div>
		</div>

		<div class="contentPage extend">
			<div class="team" <?php live_edit('team_list'); ?>>
				
				<?php $i=0; while ( have_rows('team_list') ) : the_row(); $i++; ?>
					<div class="teamList" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00" data-aos-once="true">
						<img class="hover" src="<?php the_sub_field('image_hover'); ?>" alt="<?php the_sub_field('nom'); ?>">
						<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('nom'); ?>">
						<h2><?php the_sub_field('nom'); ?></h2>
						<p><?php the_sub_field('specialite'); ?></p>
					</div>
				<?php endwhile; ?>
				
			</div>
		</div>

<?php get_footer(); ?>