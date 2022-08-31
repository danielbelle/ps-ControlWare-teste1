<?php
$nome='';
$sobreNome='';

$nome= $_POST['nome'];
$sobreNome = $_POST['sobreNome'];

echo json_encode("Meu nome:".$nome."<br>"."Meu sobrenome:".$sobreNome);
