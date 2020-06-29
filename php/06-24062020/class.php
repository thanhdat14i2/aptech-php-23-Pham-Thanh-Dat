<?php
    class ConNguoi{
        public $name;
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
    }
    $binh = new ConNguoi();
    echo $binh->name;
    $binh->setName('dau bui quan gie');
    echo $binh->getName();
?>