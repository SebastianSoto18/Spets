<?php
    error_reporting(E_ALL);
    ini_set('ignore_repeated_errors',TRUE);
    ini_set('display_errors',FALSE);
    ini_set('log_errors',TRUE);
    ini_set("error_log","php-error.log");
    error_log("inicio de aplicacion web");

    require_once 'clases/errors.php';
    require_once 'clases/succes.php';                                                                                                                                                                               
    require_once 'libs/database.php';
    //require_once 'libs/messages.php';
    require_once 'libs/controller.php';
    require_once 'libs/view.php';
    require_once 'libs/model.php';
    require_once 'libs/app.php';
    require_once 'config/config.php';
    require_once 'clases/sessionController.php';
    require_once 'models/UserModel.php';
    require_once 'models/PetsModel.php';
    
    $app=new App();
?>