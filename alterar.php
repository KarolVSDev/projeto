<?php
error_reporting (0);
include("conexao.php");
$up = $_GET["up"];
$sql = "SELECT * FROM clientes WHERE id='$up'";
$res = mysqli_query($conect, $sql);
while ($r = mysqli_fetch_array($res)) {

echo '<form method="POST" >
<table>
    <tr>
    <td width="100">    
    <label>Nome</label></td><td><input name="nome" value="'.$r['nome'].'" type="text"></td></tr>
    <tr>
    <td width="100"> 
    <label>Telefone</label></td><td><input name="fone" value="'.$r['telefone'].'" type="text"></td></tr>
    <tr>
    <td width="100"> 
    <label>Email</label></td><td><input name="email" value="'.$r['email'].'" type="text"></td></tr>
    <tr>
    <td align="center" colspan="2"><input type="submit" name="update">
</form>
  <br><br>  
  <br><br>
   ';
            }

$nome = $_POST["nome"];
$telefone= $_POST ["fone"];
$email = $_POST ["email"];
$update = $_POST ["update"];

if (isset($update)) {
    // Altera os dados do cliente pelo id do cliente logado.
$altera = "UPDATE clientes SET nome='$nome', telefone='$telefone', email='$email' WHERE id='$up'";
if(mysqli_query( $conect,$altera))
{  
echo "<script>
alert('Seu cadastro foi atualizado com sucesso!');
window.location='index.php';
</script>"; 
}
else
{  
echo "Atualização falhou; ".mysqli_error($altera);  
}
}	

?>
