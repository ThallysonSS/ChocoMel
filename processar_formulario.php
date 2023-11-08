<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Configurar o email
    $destinatario = "thallyson.santos@escola.pr.gov.br";
    $assunto = "Mensagem de Contato de $nome";
    $corpo = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";

    // Enviar o email
   if (mail($destinatario, $assunto, $corpo));
   // Exibir uma mensagem de confirmação
   echo "Obrigado por entrar em contato! Sua mensagem foi enviada com sucesso.";
} else {
    / Exibir uma mensagem de erro, se houver problemas com o envio do email.
        echo "Desculpe, houve um problema ao enviar a mensagem. Por favor, tente novamente.";

    // Redirecionar para uma página de confirmação
    header("Location: confirmacao.html");
}
?>
