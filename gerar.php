<?php
header("Content-type: text/html; charset=UTF-8");
include 'includes/gerador.php';
$quantidade = (int)$_REQUEST['q'];
if(!$quantidade) exit;
echo joelipsum($quantidade);
