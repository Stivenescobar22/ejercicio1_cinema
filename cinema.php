<?php
    
    if(isset($_POST["btncalcular"])){
      require_once 'proceso.php';
      $objedad = new Entrada();

        $valor = $_POST["txtvaloredad"];

        $objedad-> setValoredad($valor);
        $objedad -> calcularFuncion();
        echo "<br>";

        
    }else{
        echo "Eres un hacker, he capturado tu ip.";
    }









?>
