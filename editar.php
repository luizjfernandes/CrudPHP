<?php  
require 'config.php';

$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

        if($sql->rowCount() > 0){
            $usuario = $sql->fetch(PDO::FETCH_ASSOC);

        }else{
            header("Location: index.php");
        }
}
?>

<h1> editar usuario</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$usuario['nome']?>"/>
    <label>
        nome: <input type="text" name="nome" value="<?=$usuario['nome']?>"/>      
    </label>
    <label> 
        email: <input type="email" name="email" value="<?=$usuario['email']?>"/> 
    </label> 
    <input type="submit" value="salvar">

</form> 
