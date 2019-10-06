<?php

if(isset($_GET['view']))
{
    if(file_exists('core/controllers/' . $_GET['view'] . 'Controller.php'))
    {
        require_once 'core/controllers/' . $_GET['view'] . 'Controller.php';
    }
    else
    {
        require_once 'core/controllers/errorController.php';
    }
}
else
{
    require_once 'core/controllers/indexController.php';
}

?>
