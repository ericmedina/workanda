<?php

class Usuario
{
    private $id, $nombre, $apellido, $email, $password;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public static function getAll()
    {
        $conn = require_once path('./helpers/Connection.php');
        $query = $conn->query("SELECT * FROM usuarios");
        $usuarios = [];
        if ($query) {
            while ($usuario =  mysqli_fetch_assoc($query)) {
                array_push($usuarios, $usuario);
            }
        }
        return $usuarios;
    }

    public static function get($filter)
    {
        $conn = require_once path('./helpers/Connection.php');
        $query = $conn->query("SELECT * FROM usuarios WHERE CONCAT(nombre, apellido) LIKE '%$filter%' OR email LIKE '%$filter%'");
        $usuarios = [];
        if ($query) {
            while ($usuario =  mysqli_fetch_assoc($query)) {
                array_push($usuarios, $usuario);
            }
        }
        return $usuarios;
    }

    public function find($id){
        $conn = require_once path('./helpers/Connection.php');
        $query = $conn->query("SELECT * FROM usuarios WHERE id = $id LIMIT 1");
        if ($query) {
            $usuario =  mysqli_fetch_assoc($query);
            $this->id = $id;
            $this->nombre = $usuario['nombre'];
            $this->apellido = $usuario['apellido'];
            $this->email = $usuario['email'];
            $this->password = $usuario['password'];
        }
    }
    public function findByEmail($email){
        $conn = require_once path('./helpers/Connection.php');
        $query = $conn->query("SELECT * FROM usuarios WHERE email = '$email' LIMIT 1");
        if ($query) {
            $usuario =  mysqli_fetch_assoc($query);
            $this->id = $usuario['id'];
            $this->nombre = $usuario['nombre'];
            $this->apellido = $usuario['apellido'];
            $this->email = $usuario['email'];
            $this->password = $usuario['password'];
        }
    }

    public function insert()
    {
        $conn = require_once path('/helpers/Connection.php');
        $sql = "INSERT INTO `usuarios` (`nombre`,  `apellido`,  `email`,  `password`) VALUES  ('$this->nombre','$this->apellido', '$this->email', '" . password_hash($this->password, PASSWORD_BCRYPT) . "' )";
        if (!$conn->query($sql)) {
            return false;
        }
        return true;
    }
    public function updateWithoutPass()
    {
        $conn = require_once path('/helpers/Connection.php');
        $sql = "UPDATE `usuarios` SET `nombre`='$this->nombre',`apellido`='$this->apellido',`email`='$this->email' WHERE `id` = $this->id";
        if (!$conn->query($sql)) {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return;
        }
    }
    public function update()
    {
        $conn = require_once path('/helpers/Connection.php');
        $sql = "UPDATE `usuarios` SET `nombre`='$this->nombre',`apellido`='$this->apellido',`email`='$this->email',`password`='" . password_hash($this->password, PASSWORD_BCRYPT) . "' WHERE `id` = $this->id";
        if (!$conn->query($sql)) {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return;
        }
    }
    public static function delete($id)
    {
        $conn = require_once path('/helpers/Connection.php');
        $sql = "DELETE FROM `usuarios` WHERE `id` = $id";
        if (!$conn->query($sql)) {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return;
        }
    }
}
