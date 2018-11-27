<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <?php wp_head(); ?>
</head>
<body>
    <main>
		<nav>
			<div class="innerNav">
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/logo-es-grimentz.svg" alt="ES Grimentz - ecole suisse de ski">
					</a>
				</div>
				
				<?php wp_nav_menu( array( 'theme_location' => 'pages' ) ); ?>

				<div class="phoneNav" id="phone">
					<span>
						navigation
						<i class="material-icons"> expand_more </i>
					</span>
				</div>

				<div class="buttons">

					<div class="selectBox">
						<select class="lang">
							<option>FR</option>
							<option>EN</option>
							<option>DE</option>
						</select>
					</div>

					<a href="" target="_blank" class="button booking">Booking</a>
				</div>
			</div>
		</nav>


	<div id="wrap">


		<div class="subNav" id="one">
			<div>
				<!--<img src="<?php bloginfo('template_url'); ?>/images/submenu1.jpg">-->
				<h3>Collectifs enfants</h3>
				<p>Pour les enfants et les adolescents, un apprentissage en groupe.</p>
				<ul>
					<li><a href="https://yannroy.com/es2018/jardin-des-neiges/">Jardin des neiges</a></li>
					<li><a href="https://yannroy.com/es2018/ski-enfants/">Ski</a></li>
					<li><a href="https://yannroy.com/es2018/snowboard-enfants/">Snowboard</a></li>
				</ul>
			</div>
			<div>
				<!--<img src="<?php bloginfo('template_url'); ?>/images/submenu2.jpg">-->
				<h3>Cours privés</h3>
				<p>Donnons du sens à vos envies pour élargir vos perspectives.</p>
				<ul>
					<li><a href="https://yannroy.com/es2018/cours-prives-ski/">Ski</a></li>
					<li><a href="https://yannroy.com/es2018/cours-prives-snowboard/">Snowboard</a></li>
					<li><a href="https://yannroy.com/es2018/cours-prives-telemark/">Télémark</a></li>
				</ul>
			</div>
			<div>
				<!--<img src="<?php bloginfo('template_url'); ?>/images/submenu3.jpg">-->
				<h3>Cours personnalisés</h3>
				<p>Donnez du style à vos mouvements. Ski, Snowboard Télémark.</p>
				<ul>
					<li><a href="https://yannroy.com/es2018/cours-personnalises-freeride/">Freeride</a></li>
					<li><a href="https://yannroy.com/es2018/cours-personnalises-freestyle/">Freestyle</a></li>
					<li><a href="https://yannroy.com/es2018/cours-personnalises-competition/">Compétition</a></li>
				</ul>
			</div>
		</div>

		<!--<div class="subNav hidden" id="ttt">
			
			<ul class="menuList">
				<h3>Tarifs</h3>
				<li><a href="https://yannroy.com/es2018/tarifs/">Tarifs</a></li>
				<li><a href="https://yannroy.com/es2018/conditions-generales/">Conditions générales</a></li>
			</ul>
		
		</div>-->

		<div class="subNav hidden" id="three">
			
			<ul class="menuList">
				<h3>Infos pratique</h3>
				<li><a href="https://yannroy.com/es2018/reservations/">Réservation</a></li>
				<li><a href="https://yannroy.com/es2018/rendez-vous/">Rendez-vous</a></li>
				<li><a href="https://yannroy.com/es2018/garderie/">Garderie</a></li>
				<li><a href="https://yannroy.com/es2018/agenda/">Agenda</a></li>
				<li><a href="https://yannroy.com/es2018/contact/">Contact</a></li>
			</ul>
		</div>

		<div class="subNav hidden" id="uuu">
			
			<ul class="menuList">
				<h3>Activités</h3>
				<!--<li><a href="https://yannroy.com/es2018/les-formules/">L'és formules</a></li>-->
				<li><a href="https://yannroy.com/es2018/les-magic/">L'és Magic</a></li>
				<!--<li><a href="https://yannroy.com/es2018/les-entreprise/">L'és entreprise</a></li>-->
			</ul>
		</div>

		<div class="subNav hidden" id="two">
			
			<ul class="menuList">
				<h3>Ecole</h3>
				<li><a href="https://yannroy.com/es2018/the-es-team/">Team</a></li>
				<li><a href="https://yannroy.com/es2018/emplois/">Emploi</a></li>
				<li><a href="https://yannroy.com/es2018/liens-utiles/">Liens | Partenaires</a></li>
				<li><a href="https://yannroy.com/es2018/historique/">Histoire de l'és</a></li>
			</ul>
		</div>

	</div>

	<div class="overlay"></div>