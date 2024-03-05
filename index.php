<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
  

    <h1>Seja bem vindo!</h1>
    <br>
    <h2>Cadastre-se aqui!</h2>
    <form action="cadastro.php" method="POST">
    <br>
        <form action="processar_formulario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br>

        <label for="email">Telefone:</label>
        <input type="text" name="fone" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>

        <input type="submit" name="enviar" value="Enviar">
        </form>

       <br>

      
        <h2> Lista de Cadastro </h2>
        <br> 

      <center>  <table>
 
            <tr>
             <th>Nome</th>
             <th>Telefone</th>
             <th>Email</th>
             <th>Editar</th>
             <th>Excluir</th>
            </tr>

<?php

include("conexao.php");
$sql = "SELECT * FROM clientes";
$res = mysqli_query($conect, $sql);      
                        
            while ($r = mysqli_fetch_array($res)) {

              $id = $r['id'];
            echo '<tr>
 <td>'.$r['nome'].'</td>
  <td>'.$r['telefone'].'</td>
  <td>'.$r['email'].'</td>
  <td> 
 <a href="alterar.php?up='.$id.'" ><img src="update.png" alt="Alterar" width="16" height="16" > </a> 
  </td>
  <td><a href=excluir.php?ex='.$id.'><img src="excluir.png"  alt="Excluir" width="16" height="16" > </a>  
  </td>
 </tr>'
;

}

?>


</table>
</center>
 

  
 


  

</body>
</html>