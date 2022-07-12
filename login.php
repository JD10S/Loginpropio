<?php
namespace App\Models;

use PDO; 

class login extends \Core\Model{
    public static function getUsuario($usuario) {
        try {
            $db = static::getDB();
            $sql = "SELECT * FROM usuarios WHERE nomusu='$usuario'";
            $consulta = $db->query($sql);
            $consulta = $consulta->fetchAll(PDO::FETCH_ASSOC);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(\PDOException $exception) {
           $consulta = ['error' => 'Se ha capturado el siguente error: '.$exception->getMessage()];
          }
          $db = null; 
          return $consulta;
    }
    public static function registro($data){
        $correo = $data['correo'];
        $nomusu = $_POST['Usuario'];
        $password = $_POST['Contraseña'];
        $tipo = 'cliente';
        try {
            $db = static::getDB();
            $sql = "INSERT INTO `usuarios` (`correo`, `nomusu`, `password`, `tipo`) VALUES ('$correo','$nomusu','$password','$tipo')";
            $consulta = $db->exec($sql);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
        $db = null; 
    }
}