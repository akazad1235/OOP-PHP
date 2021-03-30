<?php
    class Animals{
        public static $dog ="thisi sdon";
        public static $hen;
        public function Dog(){
            
            echo (self::$dog);
        }

    }

    $obj = new Animals();
     $obj->Dog();
    


?>