//formulario.js
	
	
	$('#formulario').submit(function(e){
		e.preventDefault();
		
		if($('#enviar').val() == 'Enviando...'){
			return(false);
		}
		
		$('#enviar').val('Enviando...');
		
		$.ajax({
			url: 'valida-formulario.php',
			type: 'post',
			dataType: 'html',
			data: {
				'metodo': $('#metodo').val(),
				'nome': $('#nome').val(),
				'email': $('#email').val(),
				'senha': $('#senha').val(),
				
			}
		}).done(function(data){
			
			alert(data);
			
			$('#enviar').val('Enviar dados..');
			$('#metodo').val('formulario');
			$('#nome').val('');
			$('#email').val('');
			$('#senha').val('');
			
			
		});
		
	});