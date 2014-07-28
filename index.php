<?php
    ini_set('display_errors', true);
    error_reporting(E_ALL | E_STRICT);
    require_once "template/header.php";
    require_once "template/menu.php";

    //if(!isset($_GET['page'])){
    //    require_once("home.php");
    //}else{
    //    require_once($_GET['page'].".php");
    //}

$url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$array = explode('/',$url['path']);
$ultimo = count($array) - 1;
$pagina = $array[$ultimo];



function rota($pagina) {

    $paginasValidas = array("home","empresa","produtos","servicos","contato");

    if( in_array( $pagina, $paginasValidas)):
        require_once($pagina.".php");
    elseif ( $pagina == ""):
        require_once("home.php");
    else:
        require_once("erros/404.php");
    endif;
}
?>

<?php rota($pagina); ?>

<?php require_once "template/footer.php"; ?>
