<?php
//error_reporting(0);
if(isset($_POST['enviar'])) {
$input = filter_input(INPUT_POST,'cnpj', FILTER_SANITIZE_STRING);
//-
$replace = str_replace('/','',$input);
$replace1 = str_replace('-','',$replace);
$cnpj = str_replace('.','',$replace1);
//-
$api = file_get_contents('https://www.receitaws.com.br/v1/cnpj/'.$cnpj);
$row = json_decode($api,true);
/*
echo '<pre>';
print_r($json);
echo '</pre>';
*/
}
?>