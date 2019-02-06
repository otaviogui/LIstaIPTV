<?php
namespace App; 
use SON\init\Bootstrap;



class Init extends Bootstrap{
    
  public function initRoutes()
  {
        $arr['home'] = array ('route'=>'/', 'controller'=>'index', 'action'=>'index', 'title'=>'Titulo teste');
        $arr['Empresa'] = array ('route'=>'/empresa', 'controller'=>'index', 'action'=>'Empresa', 'title'=>'Titulo teste2');
        $arr['login'] = array ('route'=>'/login', 'controller'=>'index', 'action'=>'login', 'title'=>'Titulo teste3');
        $this->setRoutes($arr);

  }

  public static function getDb()
  {
    $user= 'root';
    $pass= '';
    $conn = new \PDO('mysql:host=localhost; dbname=listaiptv', $user, $pass);
    return $conn;
  }
}

?>