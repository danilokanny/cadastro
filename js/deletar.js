(function ($)){

	$(document).ready(function () {
		function enviar(valor){
			$.ajax({
				url: "deletar.php",
				type: "GET",
				date: {id: valor},
				dateType: "html",

				beforeSend: function(){

					$('div#carregando').css({'display:block'});
				},

				complete: function() {},
				error: function() {},
				sucess: function() {},
			});


		}


	});

	$('botao').on('click', function(){

		var x = $(this).attr('alt');
		// alert("Valor do ID: " + x);
		enviar();

	})
} (jQuery);