<?php
//Declaração de variaveis com dados fixos
$nome = "Maria Joana";
$idade = 18;
$cidade = "Ipatinga";

//Exibindo os dados
echo "<h1>Dados do Usuário</h1>";
echo "Nome:". $nome. "<br>"; //O ponto (.) concatena strings
echo "Idade:". $idade. "<br>"; //Insere uma quebra de linha (uma nova linha) no navegador do usuário
echo "Cidade:". $cidade. "<br>"; //$cidade - interpolação de strings: substitui os nomes das variáveis por seus valores reais

?>