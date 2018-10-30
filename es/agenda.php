<?php 
/*
Template Name: Agenda
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
				<p><?php the_field("sous_titre_de_la_page"); ?></p><br/><br/><br/><br/>
				<a class="button" href="https://yannroy.com/es2018/tarifs/">Tarifs</a>
			</div>
		</section>
		<div class="fond" style="background: url(<?php the_field('banner'); ?>); background-size: cover; background-position: center;"></div>

		<div class="bgPage spaceTop" id="sectionTop">
			<div class="inner">
			</div>
		</div>

		<div class="contentPage extend">
			<div class="team agenda" <?php live_edit('agenda'); ?>>
				
				<?php $i=0; while ( have_rows('agenda') ) : the_row(); $i++; ?>
					<div class="agendaList" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00" data-aos-once="true">
						<div class="agendaLeft">
							<i class="material-icons">today</i>
							<h2><?php the_sub_field('date'); ?></h2>
						</div>
						<div class="agendaRight">
							<h3><?php the_sub_field('titre'); ?></h3>
							<h4><?php the_sub_field('sous_titre'); ?></h4>
							<div class="content">
								<?php the_sub_field('contenu'); ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				
			</div>
		</div>

<?php get_footer(); ?>