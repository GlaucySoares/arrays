 Qual é a diferença entre os métodos in_array() e array_search()? 
 <br>
Escreva exemplos para ilustrar.
<br>
<br>
AS duas são usadas para procurar valores em arrays, mas têm diferenças importantes em comportamento e retorno
<br>
<br>
Diferenças principais:
<br>
<br>
Função: in_array()
<br>
<br>
O que faz: Verifica se um valor existe em um array
<br>
<br>
Retorno: true or false
<br>
<br>
Função: array_search()
<br>
<br>
O que faz: Identifica o que é pedido / caso não houver apresenta uma página em branco "Null"
<br>
<br>
Retorno: o iten solicitado


in_array
<?php
$nomes = ["Ana", "Carlos", "João"];

if (in_array("Carlos", $nomes)) {
    echo "Carlos está no array.";
} else {
    echo "Carlos não está no array.";
}
?>

array_search
<?php
$nomes = ["Ana", "Carlos", "João"];

$indice = array_search("João", $nomes);

if ($indice !== false) {
    echo "João foi encontrado no índice $indice.";
} else {
    echo "João não está no array.";
}
?>



