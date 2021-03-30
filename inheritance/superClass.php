<?php
 class BaseClass{
     public $name;
     public $age; 

   
     public function Details(){
         echo "this is base class";
     }
 }



 class childClass extends BaseClass{
    public $address;
    public function address(){
        echo $this->address;
    }

}

$obj2 = new childClass('dhaka, bangladesh');
$obj2->Details();
?>