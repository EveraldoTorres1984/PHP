<?php

require 'config.php';

$lista = [];
//pegando os usuarios
$sql = $conn->query("SELECT * FROM tbl_teste");
if ("SELECT COUNT * FROM tbl_teste" > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<a href="adicionar.php">Adicionar Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($lista as $usuario) :  ?>
        <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['nome']; ?></td>
            <td><?php echo $usuario['email'] ?></td>
            <td>
                <a href="editar.php?id=<?php echo $usuario['id']; ?>">[ Editar ]</a>
                <a href="excluir.php?id=<?php echo $usuario['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>

            </td>
        </tr>
    <?php endforeach; ?>
</table>