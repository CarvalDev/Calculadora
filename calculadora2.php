<?php
   
   
    require_once './CLASSES/calcu.php';

    $obj = new Calculadora();

    if(isset($_POST['numb'])){
        $tela = $_POST['tela'];
        $num = $_POST['numb'];
        $escrito = $obj->escreve($tela, $num);
    }
    else{
        $escrito=$obj->apaga();
    }

    if(isset($_POST['op'])){
        
        $telinha = $_POST['tela'];        
        $operador = $_POST['op'];
        $cokie = new Cookies();
        $escrito = $obj->apaga();
        $set = $cokie->setar($operador, $telinha);
    }
   
    
    if(isset($_POST['igual'])){
        $tv = $_POST['tela'];
        $escrito = $obj->operacao($tv);
    }
    

    if(isset($_POST['zera'])){
        $escrito = $obj->apaga();
    }



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
        <div class="conteudo">
            <div class="calculadora">
                <form name="formu" method="post" action="" class="formu">
                    <div class="tamain"><input class="linha1" type="text" name="tela" value="<?php echo @$escrito; ?>"><br>
                    <div class="linha"><input type="submit" name="numb" class="numero" value="7">
                    <input type="submit" name="numb" class="numero" value="8">
                    <input type="submit" name="numb" class="numero" value="9">
                    <input type="submit" name="op" class="op" value="+"></div>
                    <div class="linha"><input type="submit" name="numb" class="numero" value="4">
                    <input type="submit" name="numb" class="numero" value="5">
                    <input type="submit" name="numb" class="numero" value="6">
                    <input type="submit" name="op" class="op" value="-"></div>
                    <div class="linha"><input type="submit" name="numb" class="numero" value="1">
                    <input type="submit" name="numb" class="numero" value="2">
                    <input type="submit" name="numb" class="numero" value="3">
                    <input type="submit" name="op" class="op" value="*"></div>
                    <div class="linha">
                    <input type="submit" name="zera" class="op" value="C">
                    <input type="submit" name="op" class="op" value="/">
                    <input type="submit" class="numero" name="numb" value="0">
                    <input type="submit" name="igual" class="ingual" value="="></div>
                </div>
                </form>
            </div>
        </div>
</body>
</html>