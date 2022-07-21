<?php
$itensLista = file_get_contents('lista.txt');
$arrayList = explode(',', $itensLista);
?>
<form action="recebedor.php" method="POST">
    <h3>Novo nome:</h3>
    <input type="text" name="nome">
    <button type="submit">Adicionar</button>
</form>

<div>
    <h1>Lista de Nomes</h1>
    <ul>
        <?php
        if($arrayList){
        foreach($arrayList as $list){
            echo '<li>'.$list.'</li>';            
        }
    }
        ?>
    </ul>
</div>