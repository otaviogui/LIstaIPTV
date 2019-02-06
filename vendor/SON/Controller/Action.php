<?php 

namespace SON\Controller;


class Action 
{
    protected $view; 
    protected $action;
    protected $title;

    function __construct()
    {
        $this->view = new \stdClass;
    }

    public function render($action, $layout=true, $title=true)
    {
        $this->action = $action;
        $this->title =  $title;
        if($layout == true && file_exists("../App/Views/layout.php") && $title== true)
        {
            include_once("../App/Views/layout.php");

        }else
        {
            $this->content();
        }
        
    }

    public function content()
    {
        $atual = get_class($this);
        $singleClassName = strtolower(str_replace("App\\Controllers\\", "", $atual));
        include_once("../App/Views/".$singleClassName."/".$this->action.".php");
    }

    public function title()
    {
        echo $this->action;
    }

}
