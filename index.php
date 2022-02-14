<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");
if($sql->rowCount() > 0 ){
    $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
}
?>

<h1>Lista de usuarios</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>email</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="editar.php?id=<?=$usuario['id'];?>">[editar]</a>
                <a href="excluir.php?id=<?=$usuario['id'];?>">[excluir]</a>
            </td>
         </tr>

    <?php endforeach;?>
</table>

<a href="cadastrar.php">Casdatra usuario</a>