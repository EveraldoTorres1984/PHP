<?php

require 'config.php';
require 'dao/UsuarioDaoSqlServer.php';

$usuarioDao = new UsuarioDaoSqlServer($conn);
$lista = $usuarioDao->findAll();

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
            <td><?php echo $usuario->getId(); ?></td>
            <td><?php echo $usuario->getNome(); ?></td>
            <td><?php echo $usuario->getEmail(); ?></td>
            <td>
                <a href="editar.php?id=<?php echo $usuario->getId(); ?>">[ Editar ]</a>
                <a href="excluir.php?id=<?php echo $usuario->getId(); ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>

            </td>
        </tr>
    <?php endforeach; ?>
</table>