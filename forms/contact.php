<?php
  // Endereço de e-mail que receberá as mensagens
  $to = 'sozinholuispaulo@gmail.com';

  // Verificar se os dados foram enviados via POST
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Capturar os dados do formulário
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : 'Sem Assunto';
    $message = isset($_POST['message']) ? $_POST['message'] : 'Sem Mensagem';

    // Configurar os headers (cabeçalhos) para o e-mail
    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Enviar o e-mail
    if (mail($to, $subject, $message, $headers)) {
      echo 'Sua mensagem foi enviada com sucesso!';
    } else {
      echo 'Houve um erro ao enviar sua mensagem. Tente novamente.';
    }
  } else {
    echo 'Método de envio inválido!';
  }
?>
