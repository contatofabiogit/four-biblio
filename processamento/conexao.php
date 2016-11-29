<?php

require_once ('./config.php');

class Acesso {
    public $resultado;
    public $link;
    
    function DBconnect(){
        $this->link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die (mysqli_connect_errno());
        mysqli_set_charset($this->link, DB_CHARSET) or die (mysqli_error($this->link));
        return $this->link;
    }
    
    public function Query($sql){
        $con = new Acesso();
        $con->DBconnect();
        $resultado = $con->link->query($sql);
        
        return $resultado;
    }
}

?>