<?php
$nome='123';
$sobreNome='312';

$nome= $_POST['nome'];
$sobreNome = $_POST['sobreNome'];

echo json_encode("Meu nome:".$nome."<br>"."Meu sobrenome:".$sobreNome);