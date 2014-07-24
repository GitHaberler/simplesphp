<?php
    require_once "template/header.php";
    require_once "template/menu.php";

    if(!isset($_GET['page'])){
        require_once("home.php");
    }else{
        require_once($_GET['page'].".php");
    }


?>



<?php require_once "template/footer.php"; ?>
