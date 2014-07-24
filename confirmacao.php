
<?php session_start();?>

<div class="row clearfix">
    <div class="col-md-12 column">

            <h1>Dados enviados com sucesso</h1>
            <hr>
            <b>Nome     : </b><?php echo $_SESSION['nome']; ?><br>
            <b>E-mail   : </b><?php echo $_SESSION["email"]; ?><br>
            <b>Assunto  : </b><?php echo $_SESSION["assunto"]; ?><br>
            <b>Mensagem : </b><?php echo $_SESSION["mensagem"]; ?><br>
            <a href = "http://www.haberler.com.br/simplesphp?page=home">Home</a>

    </div>
</div>

