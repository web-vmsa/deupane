
	<script type="text/javascript">
		$(document).ready(function(){

			$(".alerta").hide();

			$(".confirm").on("click", function(){

				avaliacao = $("#avaliacao").val();

				if (avaliacao == "") {

					$(".alerta").fadeIn().delay(6000).fadeOut();

				} else {

					$(".convite").fadeOut(function(){

						window.location.href="<?php echo BASE_URL; ?>cliente/compartilhe";

					});

				}

			});

			$("#1").on("click", function(){

				star1();

				$("#avaliacao").val("1");

			});

			$("#2").on("click", function(){

				star2();

				$("#avaliacao").val("2");

			});

			$("#3").on("click", function(){

				star3();

				$("#avaliacao").val("3");

			});

			function star1() {
			  document.getElementById("1").src="http://localhost/deupane.com.br/assets/images/star.svg";
			  document.getElementById("2").src="http://localhost/deupane.com.br/assets/images/star-none.svg";
			  document.getElementById("3").src="http://localhost/deupane.com.br/assets/images/star-none.svg";
			}

			function star2() {
			  document.getElementById("1").src="http://localhost/deupane.com.br/assets/images/star.svg";
			  document.getElementById("2").src="http://localhost/deupane.com.br/assets/images/star.svg";
			  document.getElementById("3").src="http://localhost/deupane.com.br/assets/images/star-none.svg";
			}

			function star3() {
			  document.getElementById("1").src="http://localhost/deupane.com.br/assets/images/star.svg";
			  document.getElementById("2").src="http://localhost/deupane.com.br/assets/images/star.svg";
			  document.getElementById("3").src="http://localhost/deupane.com.br/assets/images/star.svg";
			}

		});
	</script>

	<!-- HTML -->
	<div class="alerta">
		
		<p>Por favor, avalie Mark, só vai custar um segundinho! &#128513;</p>

	</div>

	<!-- Avaliação -->
	<div class="convite">
		
		<div class="logo">
			
			<div class="mecanico">
				
				<img alt="Usuário: Mark Zuckeberg" src="<?php echo BASE_URL; ?>assets/images/IMG-20200206-WA0016.jpg">

			</div>

		</div>

		<h3>Mark Zuckeberg</h3>

		<div class="buscar-avalia">	

			<div class="avalia">
				
				<div class="stars-select">
					
					<img id="1" src="<?php echo BASE_URL; ?>assets/images/star-none.svg">
					<img id="2" src="<?php echo BASE_URL; ?>assets/images/star-none.svg">
					<img id="3" src="<?php echo BASE_URL; ?>assets/images/star-none.svg">

				</div>

			</div>
			
			<p>Avalie os serviços de Mark Zuckeberg.</p>

			<input id="avaliacao" type="text" style="display: none;" name="avaliacao">

		</div>

		<div class="actions">
			
			<div class="n-resultados">
				
				<img src="<?php echo BASE_URL; ?>assets/images/correct.svg">

			</div>

			<p>Avalie Mark pelo seu trabalho e pague-o pelo seu serviço</p>

			<div class="botao confirm"><p>AVALIAR E SAIR</p></div>

		</div>

	</div>