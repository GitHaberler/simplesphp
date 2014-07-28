<?php
    if(!$_POST['submit']){
?>

<!-- Conteudo apenas uma coluna -->
<div class="row clearfix">
    <div class="col-md-12 column">
            <form class="form-horizontal" action="/contato.php" method="post">
            <fieldset>
                <!-- Form Criado com BOOTSNIPP -->
                <legend>Formulário de Contato</legend>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="nome">Nome</label>
                    <div class="controls">
                        <input id="nome" name="nome" placeholder="" class="input-xlarge" required="" type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="email">E-mail</label>
                    <div class="controls">
                        <input id="email" name="email" placeholder="" class="input-xlarge" required="" type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="assunto">Assunto</label>
                    <div class="controls">
                        <input id="assunto" name="assunto" placeholder="" class="input-xlarge" required="" type="text">

                    </div>
                </div>

                <!-- Textarea -->
                <div class="control-group">
                    <label class="control-label" for="mensagem">Mensagem</label>
                    <div class="controls">
                        <textarea id="mensagem" name="mensagem"></textarea>
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="control-group">
                    <label class="control-label" for="submit"></label>
                    <div class="controls">
                        <input class="btn btn-success" type="submit" name="submit" value="Enviar">
                        <a class="btn btn-danger" href="home">Home</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php
    }else{
?>
<div class="row clearfix">
    <div class="col-md-12 column">

            <fieldset>
                <!-- Form Criado com BOOTSNIPP -->
                <legend>Dados enviados pelo formulário de contato</legend>
                <br>
                <b>Nome     : </b> <?php echo $_POST['nome'];?> <br>
                <b>E-mail   : </b> <?php echo $_POST['email'];?> <br>
                <b>Assunto  : </b> <?php echo $_POST['assunto'];?> <br>
                <b>Mensagem : </b> <?php echo $_POST['mensagem'];?> <br>
            </fieldset>
        <a href = "home">Home</a>
    </div>
</div>

<?php } ?>
