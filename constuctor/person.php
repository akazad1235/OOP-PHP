<?php
    class Person{

        public $name = "azad";

         public function __construct(){
            echo "this is constructor";
        }
        function names(){
            $age = 10;
            echo ($age);
        }
    }
    $obj = new Person;
     $obj->names();
?>