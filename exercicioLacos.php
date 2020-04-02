<?php
        
  $num = $_POST['valor'];
 
  if($num %2== 1){
    $valor = $num;
    for($i = ($valor - 1); $i > 0; $i--){
      $valor = $valor * $i;
    }
  }else{
    $valor = "nao e impar";
  }
 
  echo $valor;
 ?>


 <form action="exercicioLacos.php" method="POST">
  Valor:<input type="text" name="valor"> 
 <input type="submit" value="Enviar">
 </form>
