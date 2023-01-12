$(document).ready(function(){

	// $('#exampleModal').modal();
 
	$("#btn-login").click(function(){
		
		$("#btn-login").html('validando...');
		var data = $("#login-form").serialize();
			
		$.ajax({
			type : 'POST',
			url  : 'action.php',
			data : data,
			dataType: 'json',
			success :  function(response){	
				
				if (response.codigo) {	
					window.location.href = "home.php";
				} else {								
					$("#btn-login").html('Entrar');
					$("#login-alert").css('display', 'block')
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem);
				}
		    }
		});
	});

	$("#feed-button").click(function(){
		
		$("#feed-button").html('aguarde...');
		var qtdeCaixas = $(".caixa").length - 3;
		console.log(qtdeCaixas);
		$.ajax({
			type : 'POST',
			url  : 'action-posts.php',
			data: {qtde: qtdeCaixas},
			dataType: '',
			success :  function(response){
				if(response){
					$("#posts").append(response);
					$("#feed-button").html('carregar mais');
				} else {	
					$("#feed-button").css('display', 'none')								
				}
		    }
		});
	});

	//$(".modal-button").live.click(function(){
	$('body').on('click', ".modal-button", function(){
		$("#modal-button").html('aguarde...');
		var linha = $(this).siblings('.linha').val();
		var card = $(this).siblings('.card').val();
		var tipo = $(this).siblings('.tipo').val();
		$.ajax({
			type : 'POST',
			url  : 'action-modal.php',
			data: {linha, card, tipo},
			dataType: '',
			success :  function(response){
					$("#modal-contentlg").html(response);
					$('#largeModal').modal();
					$("#modal-button").html('Ler mais...');	
		    }
		});
	});
});
