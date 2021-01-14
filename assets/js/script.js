/* jQuery geral */
$(document).ready(function(){

	// Raiz
	var environment = "development";

	if (environment == "development") {
		var raiz = "http://localhost/deupane.com.br/";
	} else {
		var raiz = "http://localhost/deupane.com.br/";
	}

	/* Formulário de Login */
	$("#form_login").submit(function(e){

		e.preventDefault();

		dados_login = $(this).serialize();

		var email = $("input[type=text][name=email]").val();
		var senha = $("input[type=password][name=senha]").val();

		if (email == "" || senha == "") {

			$(".alerta p").html("Por favor, preencha todos os dados necessários!");
			$(".alerta").fadeIn().delay(6000).fadeOut();

		} else {
			
			$.ajax({
				type:'POST',
				url:raiz+'ajax',
				data:dados_login,
				success:function(result){
					if (result == 1) {
						window.location.href=raiz+'usuario'
					} else {
						$(".alerta p").html("Opa, este usuário não existe!");
						$(".alerta").fadeIn().delay(6000).fadeOut();
					}
				}
			});

		}

	});
	/* */



	/* Formulário de Registro */
	$("#form_register").submit(function(e){

		e.preventDefault();

		dados_registro = $(this).serialize();

		var email = $("input[type=text][name=email]").val();
		var senha = $("input[type=password][name=senha]").val();

		if (email == "" || senha == "") {

			$(".alerta p").html("Por favor, preencha todos os dados necessários!");
			$(".alerta").fadeIn().delay(6000).fadeOut();

		} else {
			
			
			$.ajax({
				type:'POST',
				url:raiz+'ajax/registro',
				data:dados_registro,
				success:function(result){
					if (result == 1) {
						window.location.href=raiz+'home/registerAlert'
					} else {
						$(".alerta p").html("Opa, este usuário já existe!");
						$(".alerta").fadeIn().delay(6000).fadeOut();
					}
				}
			});
			

		}

	});
	/* */

});