<?php
	if(strcasecmp('formulario', $_POST['metodo']) == 0)
	{
		$html = 'Nome'.$_POST['nome'];
		$html .="\n";
		$html .= 'Email'.$_POST['email'];
		
		$html .= "\n\n Obrigado pelo cadastro"
		
		echo $html;
	}

?>