<?php

/* //Conectando ao banco de dados com PDO
$conn = new PDO("sqlsrv:server = sherlock.no-ip.org,7556; Database = estagio_web;", 'web_estagio', 'W3b@Estagio$#'); 
 */
try {
    $conn = new PDO("sqlsrv:server = sherlock.no-ip.org,7556; Database = estagio_web;", 'web_estagio', 'W3b@Estagio$#');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

/* //Fazendo uma consulta na tabela do banco de dados
$sql = $conn->query('SELECT * FROM tbl_teste');


//Contando os registros
echo "Total: ".$sql->rowCount();

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dados); */
