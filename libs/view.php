<?php

class View {

    function __construct(){
    }

    function render($nombre, $data = []){
        $this->d = $data;
        $this->handleMessages();
        require 'views/' . $nombre . '.php';
    }
    
    private function handleMessages(){
        if(isset($_GET['succes']) && isset($_GET['error'])){
            // no se muestra nada porque no puede haber un error y success al mismo tiempo
        }else if(isset($_GET['succes'])){
            
            $this->handleSuccess();
        }else if(isset($_GET['error'])){
            $this->handleError();
        }
    }

    private function handleError(){
        if(isset($_GET['error'])){
            $hash = $_GET['error'];
            $errors = new Errors();

            if($errors->existsKey($hash)){
                error_log('View::handleError() existsKey =>' . $errors->get($hash));
                $this->d['error'] = $errors->get($hash);
            }else{
                $this->d['error'] = NULL;
            }
        }
    }


    private function handleSuccess(){
        if(isset($_GET['succes'])){
            $hash = $_GET['succes'];
            $success = new Success();

            if($success->existsKey($hash)){
                error_log('View::handleError() existsKey =>' . $success->existsKey($hash));
                $this->d['succes'] = $success->get($hash);
            }else{
                $this->d['succes'] = NULL;
            }
        }
    }

    public function showMessages(){
        $this->showError();
        $this->showSuccess();
    }

    public function showError(){
        if(array_key_exists('error', $this->d)){
            echo '<div class="error">'.$this->d['error'].'</div>';
        }
    }

    public function showSuccess(){
        if(array_key_exists('succes', $this->d)){
            echo '<div class="success">'.$this->d['succes'].'</div>';
        }
    }
}

?>