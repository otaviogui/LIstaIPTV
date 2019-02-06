<?php 

namespace SON\Di; 

class Container
{

    /* Esse name é o nome da classe que quero pegar */
    public static function getClass($name)
    {
        $str_class = "\\App\\Models\\".ucfirst($name);
        $class = new $str_class(\App\Init::getDb());
        return $class;
    }
}