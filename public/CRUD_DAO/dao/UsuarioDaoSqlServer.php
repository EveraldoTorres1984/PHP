<?php

require_once 'models/Usuario.php';

class UsuarioDaoSqlServer implements UsuarioDAO
{

    private $conn;
    public function __construct(PDO $driver)
    {
        $this->conn = $driver;
    }

    public function add(Usuario $u){

    }
    public function findAll(){
        $array = [];

        $sql = $this->conn->query("SELECT * FROM tbl_teste");
        if("SELECT COUNT * FROM tbl_teste" > 0){
            $data = $sql->fetchAll();
            foreach($data as $item){
                $u = new Usuario();
                $u->setId($item['id']);
                $u->setNome($item['nome']);
                $u->setEmail($item['email']);

                $array[] = $u;
            }
        }

        return $array;
    }
    public function findById($id){

    }
    public function update(Usuario $u){

    }
    public function delete($id){
        
    }
}
