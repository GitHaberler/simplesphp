<?php
    session_start();
    $nome = $_POST['nome'];
    $email = $_POST  ['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['assunto'] = $assunto;
    $_SESSION['mensagem'] = $mensagem;

    header("Location:http://haberler.com.br/simplesphp?page=confirmacao");

?>
<a href = "http://www.haberler.com.br/simplesphp?page=home">Home</a>

</div>
</div>
