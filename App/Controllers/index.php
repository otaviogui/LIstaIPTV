<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Di\Container;

class index extends Action
{
    
    public function index()
    {

      $list = Container::getClass("Lists");
      $lists = $list->getAll();

      $this->view->lists = $lists;
      $this->render('list');
    }

    public function newList()
    {
      $this->render('newList');

      if(isset($_POST['name_list'])){
        $list = Container::getClass("Lists");
        $lists = $list->save();
        
      }
    }

    

    public function Empresa()
    {
      $this->render('empresa');
    }

}