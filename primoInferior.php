<?php

function PrimoInferior($num){
   //Variável para verificar o número de divisores de um determinado número
   $divisores = 0;
   //Array que vai armazenar todos os primos até o valor do número informado ($num)
   $lista_de_primos = array();
   //Váriavel que irá armazenar nosso resultado final
   $primo_inferior = 0;
   
   //laço que vai passar por cada número abaixo do número informado
   for($i = 0; $i < $num; $i++){
      //laço que vai verificar se um determinado número abaixo do número informado, é primo ou não
      for($x = $i; $x > 0; $x--){
        
        if($i % $x == 0){  
          $divisores += 1;
        }
      }
      //Se o números de divisores for 2, significa que nosso número é primo, então guardamos ele na noss lista de primos 
      if($divisores == 2){
        array_push($lista_de_primos, $i); 
      }
      //Zera o nosso número divisores para reaproveitarmos a váriavel no próximo laço
      $divisores = 0;
   }
   //Guarda nosso resultado na variável primo_inferior 
   $primo_inferior = max($lista_de_primos);
   //Retorna o resultado
   echo "Número $num = ".$primo_inferior;
}


PrimoInferior(30);

?>