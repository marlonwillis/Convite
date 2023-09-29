<?php
if(isset($_POST["action"])) {
	$name = $_POST['nome'];                 // Sender's name
	$email = $_POST['email'];     // Sender's email address
	$phone  = $_POST['telefone'];     // Sender's phone address
	$cidade  = $_POST['cidade'];     // Sender's city
	$veiculo = $_POST['veiculo'];    // Sender's driver
	$from = 'Ajuda';
	$to = 'contato@measyfretes.com.br';     // Recipient's email address
	$subject = 'Measyfretes Contato';

	//$body = " From: $name \n E-Mail: $email \n Phone : $phone \n Message : $message"  ;
	$body = "De: $nome \n";
  	$body.= "EMail: $email \n";
	$body.= "Telefone : $telefone \n";
	$body.= "Cidade : $cidade\n";
	$body.= "Veiculo : $veiculo \n";

	// init error message
	$errmsg='';
	// Check if name has been entered




	$result='';
	// If there are no errors, send the email
	if (!$errmsg) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Obrigado!!! Sua mensagen foi enviada com sucesso!!! Vamos entrar em contato em breve.</div>';
		}
		else {
		  $result='<div class="alert alert-danger">Ouve um erro ao enviar sua mensagem. Por favor tente mais tarde.</div>';
		}
	}
	else{
		$result='<div class="alert alert-danger">'.$errmsg.'</div>';
	}
		echo $result;
	}
	header("Location: https://measyfretes.com.br/enviado.html", true, 301);
exit();
?>
