<?php
include("conexao.php");
error_reporting(0);
$ex = $_GET["ex"];
if (isset($ex)) {
    $sql = "DELETE FROM clientes WHERE id='$ex'";
	if(mysqli_query($conect, $sql)){
    echo "<script>
    alert('Seu cadastro foi Excluído com sucesso!');
window.location='index.php';
</script>";
	} 
	else{
    echo "Erro ao deletar os dados $sqlm. ". mysqli_error($conect);
}
}
?>