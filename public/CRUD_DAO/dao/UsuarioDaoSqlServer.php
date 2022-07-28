<?php

require_once 'models/Usuario.php';

class UsuarioDaoSqlServer implements UsuarioDAO
{

    private $conn;
    public function __construct(PDO $driver)
    {
        $this->conn = $driver;
    }

    public function add(Usuario $u)
    {
        $sql = $this->conn->prepare("INSERT INTO tbl_teste (nome, email) VALUES (:nome, :email) ");
        $sql->bindValue(':nome', $u->getNome());
        $sql->bindValue(':email', $u->getEmail());
        $sql->execute();

        $u->setId($this->conn->lastInsertId());
        return $u;
    }
    public function findAll()
    {
        $array = [];

        $sql = $this->conn->query("SELECT * FROM tbl_teste");
        if ("SELECT COUNT * FROM tbl_teste" > 0) {
            $data = $sql->fetchAll();
            foreach ($data as $item) {
                $u = new Usuario();
                $u->setId($item['id']);
                $u->setNome($item['nome']);
                $u->setEmail($item['email']);

                $array[] = $u;
            }
        }

        return $array;
    }

    public function findByEmail($email)
    {
        $sql = $this->conn->prepare("SELECT * FROM tbl_teste WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();
        if ($sql != false) {

            $data = $sql->fetch();
            $u = new Usuario();
            $u->setId($data['id']);
            $u->setNome($data['nome']);
            $u->setEmail($data['email']);

            return $data;
        } else {
            return false;
        }
    }

    public function findById($id)
    {
        $sql = $this->conn->prepare("SELECT * FROM tbl_teste WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        if ($sql != false) {

            $data = $sql->fetch();
            $u = new Usuario();
            $u->setId($data['id']);
            $u->setNome($data['nome']);
            $u->setEmail($data['email']);

            return $u;
        } else {
            return false;
        }
    }
    public function update(Usuario $u)
    {
        $sql = $this->conn->prepare("UPDATE tbl_teste SET nome= :nome, email = :email WHERE id = :id");
        $sql->bindValue(':nome', $u->getNome());
        $sql->bindValue(':email', $u->getEmail());
        $sql->bindValue('id', $u->getId());
        $sql->execute();

        return true;
    }
    public function delete($id)
    {
       $sql = $this->conn->prepare("DELETE FROM tbl_teste WHERE id = :id"); 
       $sql->bindValue(':id', $id);
       $sql->execute();
    }
}
