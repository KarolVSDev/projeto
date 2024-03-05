<?php

$nome = $_POST["nome"];
$telefone = $_POST ["fone"];
$email = $_POST["email"];
$enviar = $_POST["enviar"];

include("conexao.php");
 
if (isset($enviar)) {
$query = "INSERT INTO clientes (id, nome, telefone, email) VALUES ('NULL','$nome' , '$telefone', '$email')";
$query = mysqli_query($conect,$query);

echo '<script>
alert("cadastrado realizado com sucesso!");
window.location="index.php";
</script>';
}

?>