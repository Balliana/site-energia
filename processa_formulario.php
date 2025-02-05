<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $consumo = $_POST['consumo'];

    // Definir o destinatário do e-mail
    $to = "raphaelb.engenharia@gmai.com"; // E-mail onde os dados serão enviados
    $subject = "Novo Lead - Energia Fotovoltaica";
    
    // Mensagem do e-mail
    $message = "
    Nome: $nome\n
    E-mail: $email\n
    WhatsApp: $whatsapp\n
    Consumo: $consumo kWh/mês\n
    ";

    // Cabeçalhos do e-mail
    $headers = "From: no-reply@seusite.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Dados enviados com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar os dados.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>