<?php
    class EmpWage{
        //variable
        private $check;

        //Function to display welcome message
        public function welcome(){
            echo "Welcome to employee wage computation program \n";
        }

        //Function to generate randon number between 1 to 2
         public function getNumber(){
            return $this->check = rand(1, 2);
        }

        //Function to check employee is present or absent
        public function attendance(){
            if($this->check == 1){
                echo "Employee is present";
            }
            else{
                echo "Employee is absent";
            }
        }
    }
    $wage = new EmpWage();
    $wage->welcome();
    $wage->getNumber();
    $wage->attendance();
?>