<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Di\Container;

class index extends Action
{
    
    public function index()
    {

      $content = Container::getClass("Content");
      $contents = $content->getAll();

      $this->view->contents = $contents;
      $this->render('index');
    }

    public function Empresa()
    {
      $this->render('empresa');
    }

}