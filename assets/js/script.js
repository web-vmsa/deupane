/* jQuery geral */
$(document).ready(function(){

	// Raiz
	var environment = "development";

	if (environment == "development") {
		var raiz = "http://localhost/deupane.com.br/";
	} else {
		var raiz = "http://localhost/deupane.com.br/";
	}



	/* Sair */
	$(".sair-guia").on("click", function(){

		$(".painel").fadeOut(function(){

			window.location.href=raiz+"home/logout";

		});

	});
	/* */



	/* Editar */
	$(".editar-guia").on("click", function(){

		$(".painel").fadeOut(function(){

			window.location.href=raiz+"usuario/edit";

		});

	});
	/* */



	/* Home */
	$(".home-guia").on("click", function(){

		$(".painel-edit").fadeOut(function(){

			window.location.href=raiz+"usuario";

		});

	});
	/* */



	/* Endereço */
	$("#endereco").on("click", function(){

		$(".painel-edit").fadeOut(function(){

			window.location.href=raiz+"usuario/endereco";

		});

	});
	/* */



	/* Redirect */
	$(".notificacao").on("click", function(){

		var redirect = $(this).data("redirect");

		$(".painel").fadeOut(function(){

			window.location.href=raiz+"usuario/"+redirect;

		});

	});
	/* */



	/* Altera imagem */
	function readURL(input) {

		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#altera-img').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

	$("#imagem-perfil").change(function(){
		readURL(this);
	});
	/* */



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



	/* Formulário de Edição */
	$("#form_edit").submit(function(e){

		e.preventDefault();

		var form = $("#form_edit")[0];
		var data_edit = new FormData(form);

		$.ajax({
			type:'POST',
			url:raiz+'ajax/edit_info',
			data:data_edit,
			contentType:false,
			processData:false,
			success:function(result){
				if (result == 1) {
					$(".alerta p").html("Sua foto e seus dados foram atualizados com sucesso!");
					$(".alerta").fadeIn().delay(6000).fadeOut();
				} else {
					$(".alerta p").html("Seus dados foram atualizados com sucesso!");
					$(".alerta").fadeIn().delay(6000).fadeOut();
				}
			}
		});
	});
	/* */



	/* Pegas as notificações */
	setInterval(count_notifi, 3000);


	function count_notifi(){

		$.ajax({
			type:'POST',
			url:raiz+'ajax/get_notifi',
			success:function(result){
				$("#title").html('('+result+') DeuPane - Procure por mecânicos na sua região!');
			}
		});

	}
	/* */



	/* Pegas as notificações */
	setInterval(count_all, 3000);


	function count_all(){

		$.ajax({
			type:'POST',
			url:raiz+'ajax/get_all',
			success:function(result){
				$(".notificacoes").html(result);
			}
		});

	}
	/* */



});