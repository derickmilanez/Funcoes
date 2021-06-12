<?php
function somar(){
	$numeros = func_get_args();
    $qtd_nums = func_num_args();
    $soma = 0;
    for($i = 0; $i < $qtd_nums;$i++){
         $soma += $numeros[$i];
     }
     return $soma;
     }
	 echo somar(1,5,7,1,5,7,1,5,7,1,5,7,1,5,7,1,5,7,1,5,7,1,5,7,1,5,7,1,5,7,1,5,7);
/*
$num1 = 5;
$num2 = 2;
function somar(){
	global $num1;
	global $num2;
	return $num1 + $num2;
}
echo somar();
---
function somar($n1,$n2){
	return $n1 + $n2;
}
function subtrair($n1,$n2){
	return $n1 - $n2;
}
$num1 = 8;
$num2 = 5;
---
echo somar($num1,$num2);

function mensagem_inicial(){
	return "Aula programação web";
}
echo mensagem_inicial();
*/
?>