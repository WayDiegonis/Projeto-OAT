<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

if ($email == "teste@teste.com" && $senha == "123") {
	echo '<div class="alert alert-success" role="alert">
  Usuário cadastrado!
</div>';

}else{
	echo '<div class="alert alert-danger" role="alert">
  Falhou!!
</div>';
}

echo $email;
echo "<br><br>";
echo $senha;

?>