<?php
    require ("Frog.php");
    class Animal{
        protected $legs = 2;
        protected $cold_blooded = false;
        protected $name;
        public function __construct($name){
            $this->name = $name;
        }
        public function get_name(){
            echo $this->name."<br />";
        }
        public function get_legs(){
            echo $this->legs."<br />";
        }
        public function get_cold_blooded(){
            if ($this->cold_blooded){
                echo "true <br />";
            }
            else{
                echo "false <br />";
            }
        }
    }
 ?>
