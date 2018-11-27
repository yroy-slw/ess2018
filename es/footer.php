			<footer data-aos="fade-up">
				<h2>Une école, <span class="bold">deux bureaux</span></h2>
				<div class="footerInner">
					<section class="flex">
						<article>
							<h3>ess grimentz</h3>

							<p>Amis de la Nature 18<br/>
							3961 Grimentz<br/><br/>

							+ 41 27 475 50 60<br/>
							info@ess-grimentz.ch</p>

							<a href="" class="button">Site internet</a>
						</article>
						<article>
							<h3>ess zinal</h3>

							<p>Rue du Village<br/>
							3961 Zinal<br/><br/>

							+ 41 27 475 13 73<br/>
							info@ess-zinal.ch</p>

							<a href="" class="button">Site internet</a>
						</article>
					</section>
				</div>
			</footer>
			<div class="partenaire">
				<div class="inner">
					<div class="flex-top">
						<a href="">
							<img src="<?php bloginfo('template_url'); ?>/images/realfly.jpg" alt="Es Grimentz Partenaires">
						</a>
						<a href="">
							<img src="<?php bloginfo('template_url'); ?>/images/mymagic.jpg" alt="Es Grimentz Partenaires">
						</a>
						<a href="">
							<img src="<?php bloginfo('template_url'); ?>/images/switzerland.jpg" alt="Es Grimentz Partenaires">
						</a>
					</div>
					<div class="flex-bottom">
						<a href="">
							<img src="<?php bloginfo('template_url'); ?>/images/snowsports.jpg" alt="Es Grimentz Partenaires">
						</a>
					</div>
				</div>
			</div>
			<div class="social">
				<div class="inner">
					<h4>Retrouvez-nous sur Facebook et Instagram</h4>
					<div class="icons">
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/facebook.svg" alt="Es Grimentz sur Facebook"></a>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/instagram.svg" alt="Es Grimentz sur Instagram"></a>
					</div>
				</div>
			</div>
		</main>
		<?php wp_footer(); ?>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
		<script>

			$(".scrollTo a").click(function(){
				var link = $(this).attr("href");
				console.log(link);
				$("html, body").animate({
			        scrollTop: $(link).offset().top -80
			    }, 1000);

			    return false;
			})

			var swiper = new Swiper('.swiper-container', {
			    pagination: {
			       el: '.swiper-pagination',
			       clickable: true
			    },
			});

			AOS.init();

			// Open Sub Menus
			const listItems = document.querySelectorAll('li');

			document.querySelector('.overlay').addEventListener('click', closeAllTrigger);

			document.getElementById("menu-item-30").addEventListener('click', openNavOne);
			//document.getElementById("menu-item-31").addEventListener('click', openNavTTT);
			document.getElementById("menu-item-32").addEventListener('click', openNavTwo);
			document.getElementById("menu-item-33").addEventListener('click', openNavThree);
			document.getElementById("menu-item-335").addEventListener('click', openNavuuu);
			document.getElementById("phone").addEventListener('click', openMobile);

			function closeAll(){
				for (let i = 0; i < listItems.length; i++) {
					listItems[i].classList.remove("isActive");

					document.getElementById("one").classList.remove("open");
					document.getElementById("two").classList.remove("open");
					//document.getElementById("ttt").classList.remove("open");
					document.getElementById("three").classList.remove("open");
					document.getElementById("uuu").classList.remove("open");

					var myStyle = document.querySelector('.overlay').offsetLeft;
					if(myStyle > 0){
					     $(".overlay").fadeOut();
					}
					
				}
			}

			function closeAllTrigger(){
				for (let i = 0; i < listItems.length; i++) {
					listItems[i].classList.remove("isActive");

					document.getElementById("one").classList.remove("open");
					document.getElementById("two").classList.remove("open");
					//document.getElementById("ttt").classList.remove("open");
					document.getElementById("three").classList.remove("open");
					document.getElementById("uuu").classList.remove("open");
					$(".overlay").fadeOut();
				}
			}

			function openNavOne(e){
				closeAll();
				$(".overlay").fadeIn();
				document.getElementById("one").classList.toggle("open");
				document.getElementById("menu-item-30").classList.add("isActive");

				e.preventDefault();

			}

			function openNavTwo(e){
				closeAll();
				$(".overlay").fadeIn();
				document.getElementById("two").classList.toggle("open");
				document.getElementById("menu-item-32").classList.add("isActive");

				e.preventDefault();

			}

			/*function openNavTTT(e){
				closeAll();
				$(".overlay").fadeIn();
				document.getElementById("ttt").classList.toggle("open");
				document.getElementById("menu-item-31").classList.add("isActive");

				e.preventDefault();

			}*/

			function openNavThree(e){
				closeAll();
				$(".overlay").fadeIn();
				document.getElementById("three").classList.toggle("open");
				document.getElementById("menu-item-33").classList.add("isActive");

				e.preventDefault();

			}

			function openNavuuu(e){
				closeAll();
				$(".overlay").fadeIn();
				document.getElementById("uuu").classList.toggle("open");
				document.getElementById("menu-item-335").classList.add("isActive");

				e.preventDefault();

			}

			function openMobile(e){
				document.getElementById("wrap").classList.toggle("openMobile");

				e.preventDefault();

			}


		</script>
	</body>
</html>