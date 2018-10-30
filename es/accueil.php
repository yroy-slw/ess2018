<?php 
/*
Template Name: Accueil
*/ 
?>

<?php get_header(); ?>
	<div class="content">
		<section class="banner" style="background: url(<?php the_field('banner'); ?>); background-size: cover; background-position: center;">
			<article>
				<img data-aos="fade-up" data-aos-once="true" src="<?php bloginfo('template_url'); ?>/images/es-grimentz-zinal.svg" alt="Bienvenue à l'es Grimentz - Zinal">
			</article>
			<span class="more" id="scrollHome">
				<i class="material-icons">expand_more</i>
			</span>
		</section>
		<div class="bgPage" id="sectionTop" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
			<section class="accroche textWhite">
				<article>
					<h1>
						<?php the_field("texte_accroche"); ?>
					</h1>
					<a target="_blank" href="https://www.booking-corner.com/cmsscripts/bookOnline.aspx?eco=Grimentz&page=bookGrimentz&lang=fr" class="button">Booking</a>
				</article>
			</section>
			<section class="shortCuts">
				<?php $n=0; while ( have_rows('shortcuts') ) : the_row(); $n++; ?><?php endwhile; ?>
				<?php while ( have_rows('shortcuts') ) : the_row(); ?>
				<article class="a<?php echo $n; ?>col">
					<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('titre'); ?>">
					<div class="content">
						<h2><?php the_sub_field('titre'); ?></h2>
						<p><?php the_sub_field('sous-titre'); ?></p>
						<a href="<?php the_sub_field('lien'); ?>" class="button"><?php the_sub_field('texte_lien'); ?></a>
					</div>
				</article>
				<?php endwhile; ?>
			</section>
		</div>
		<section class="motion" data-aos="fade-up" style="background: url(<?php the_field('motion_banner'); ?>); background-size: cover;">
			<article>
				<img src="<?php the_field('motion_titre'); ?>" alt="<?php the_field('motion_sous-titre'); ?>">
				<h3><?php the_field('motion_sous-titre'); ?></h3>
				<a href="https://yannroy.com/es2018/les-formules/" class="button"><?php the_field('lien'); ?></a>
			</article>
		</section>

		<script>
			function scrollTo(element) {
			  window.scroll({
			    behavior: 'smooth',
			    left: 0,
			    top: element.offsetTop - 72
			  });
			}

			document.getElementById("scrollHome").addEventListener('click', () => {
			  scrollTo(document.getElementById("sectionTop"));
			});
		</script>

<?php get_footer(); ?>
