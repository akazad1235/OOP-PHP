<?php
    class Person{
        public $name;
        public $age; 

         public function __construct($n, $a){
           $this->name = $n;
           $this->age = $a;
        }
        function names(){
            echo $this->name;
        }
    }
    $obj = new Person("ak azad", 25);
    $obj->names();
?>