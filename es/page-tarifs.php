<?php 
/*
Template Name: Modele tarifs
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
				<a class="button" href="">Liste de prix pdf</a>
			</div>
		</section>
		<div class="fond" style="background: url(<?php the_field('banner'); ?>); background-size: cover; background-position: center;"></div>

		<div class="bgPage spaceTop" id="sectionTop">
			<div class="inner">
				<section class="shortCuts">
					<?php $i=0; while ( have_rows('blocks') ) : the_row(); $i++; ?>
					<article data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00" data-aos-once="true">
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

		<div class="contentPage extend">
			<div class="tarifs">
				
				<div class="blockTarif" <?php live_edit('titre_jardin_des_neiges, texte_jardin_des_neiges, tarifs_jardin_des_neiges'); ?>>
					<h2><?php the_field("titre_jardin_des_neiges"); ?></h2>
					<?php the_field("texte_jardin_des_neiges"); ?>
					<table>
						<?php while ( have_rows('tarifs_jardin_des_neiges') ) : the_row(); ?>
						<tr>
							<td align="right"><?php the_sub_field("gauche"); ?></td>
							<td align="left" class="bold"><?php the_sub_field("droite"); ?></td>
						</tr>
						<?php endwhile; ?>
					</table>
				</div>

				<div class="blockTarif" <?php live_edit('titre_jardin_des_neiges_copie, texte_jardin_des_neiges_copie, tarifs_jardin_des_neiges_copie'); ?>>
					<h2><?php the_field("titre_jardin_des_neiges_copie"); ?></h2>
					<?php the_field("texte_jardin_des_neiges_copie"); ?>
					<table>
						<?php while ( have_rows('tarifs_jardin_des_neiges_copie') ) : the_row(); ?>
						<tr>
							<td align="right"><?php the_sub_field("gauche"); ?></td>
							<td align="left" class="bold"><?php the_sub_field("droite"); ?></td>
						</tr>
						<?php endwhile; ?>
					</table>
				</div>

				<div class="blockTarif" <?php live_edit('titre_jardin_des_neiges_copie2, texte_jardin_des_neiges_copie2, tarifs_jardin_des_neiges_copie2'); ?>>
					<h2><?php the_field("titre_jardin_des_neiges_copie2"); ?></h2>
					<?php the_field("texte_jardin_des_neiges_copie2"); ?>
					<table class="first">
						<?php while ( have_rows('tarifs_jardin_des_neiges_copie2') ) : the_row(); ?>
						<tr class="first">
							<td align="center"><?php the_sub_field("gauche"); ?></td>
						</tr>
						<?php endwhile; ?>
					</table>
				</div>

				<div class="blockTarif" <?php live_edit('titre_jardin_des_neiges_copie3, texte_jardin_des_neiges_copie3, tarifs_jardin_des_neiges_copie3'); ?>>
					<h2><?php the_field("titre_jardin_des_neiges_copie3"); ?></h2>
					<?php the_field("texte_jardin_des_neiges_copie3"); ?>
					<table class="complex">
						<tr>
							<td align="center">&nbsp;</td>
							<td align="center">09:00<br/>10:15</td>
							<td align="center">10:30<br/>11:45</td>
							<td align="center">11:45<br/>13:00</td>
							<td align="center">13:30<br/>14:45</td>
							<td align="center">14:45<br/>16:00</td>
						</tr>
						<?php while ( have_rows('tarifs_jardin_des_neiges_copie3') ) : the_row(); ?>
						<tr>
							<td align="center"><?php the_sub_field("1col"); ?></td>
							<td align="center"><?php the_sub_field("2col"); ?></td>
							<td align="center"><?php the_sub_field("3col"); ?></td>
							<td align="center"><?php the_sub_field("4col"); ?></td>
							<td align="center"><?php the_sub_field("5col"); ?></td>
							<td align="center"><?php the_sub_field("6col"); ?></td>
						</tr>
						<?php endwhile; ?>
					</table>
				</div>

				<div class="blockTarif" <?php live_edit('titre_jardin_des_neiges_copie4, texte_jardin_des_neiges_copie4, tarifs_jardin_des_neiges_copie6'); ?>>
					<h2><?php the_field("titre_jardin_des_neiges_copie4"); ?></h2>
					<?php the_field("texte_jardin_des_neiges_copie4"); ?>
					<table class="complex">
						<tr>
							<td align="center">&nbsp;</td>
							<td align="center">09:00<br/>10:15</td>
							<td align="center">10:30<br/>11:45</td>
							<td align="center">11:45<br/>13:00</td>
							<td align="center">13:30<br/>14:45</td>
							<td align="center">14:45<br/>16:00</td>
						</tr>
						<?php while ( have_rows('tarifs_jardin_des_neiges_copie6') ) : the_row(); ?>
						<tr>
							<td align="center"><?php the_sub_field("1col"); ?></td>
							<td align="center"><?php the_sub_field("2col"); ?></td>
							<td align="center"><?php the_sub_field("3col"); ?></td>
							<td align="center"><?php the_sub_field("4col"); ?></td>
							<td align="center"><?php the_sub_field("5col"); ?></td>
							<td align="center"><?php the_sub_field("6col"); ?></td>
						</tr>
						<?php endwhile; ?>
					</table>
				</div>

				<div class="blockTarif" <?php live_edit('titre_jardin_des_neiges_copie5, texte_jardin_des_neiges_copie5, tarif-gauche, tarif-droite'); ?>>
					<h2><?php the_field("titre_jardin_des_neiges_copie5"); ?></h2>
					<?php the_field("texte_jardin_des_neiges_copie5"); ?>
					<div class="double">
						<div class="left">
							<span>1 x 150min.</span>
							<table class="complex">
								<?php while ( have_rows('tarif-gauche') ) : the_row(); ?>
								<tr>
									<td align="center"><?php the_sub_field("1col"); ?></td>
									<td align="center"><?php the_sub_field("2col"); ?></td>
								</tr>
								<?php endwhile; ?>
							</table>
						</div>
						<div class="right">
							<span>3 x 150min.</span>
							<table class="complex">
								<?php while ( have_rows('tarif-droite') ) : the_row(); ?>
								<tr>
									<td align="center"><?php the_sub_field("1col"); ?></td>
									<td align="center"><?php the_sub_field("2col"); ?></td>
								</tr>
								<?php endwhile; ?>
							</table>
						</div>
					</div>
				</div>
				
			</div>
			<div class="rrr">
				<a class="button" href="https://yannroy.com/es2018/conditions-generales/ ">Conditions générales</a>
			</div>
		</div>

<?php get_footer(); ?>