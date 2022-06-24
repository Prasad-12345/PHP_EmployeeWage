<?php
    class EmpWage{
        //variable
        private $check;
        private $wagePerHour = 20;
        private $fullDayHour = 8;

        //Function to display welcome message
        public function welcome(){
            echo "Welcome to employee wage computation program \n";
        }

        //Function to generate randon number between 1 to 2
         public function getNumber(){
            $this->check = rand(1, 2);
        }

        //Function to check employee is present or absent
        public function attendance(){
            if($this->check == 1){
                echo "Employee is present \n";
            }
            else{
                echo "Employee is absent \n";
            }
        }

        //Function to calculate daily employee wage
        public function getDailyWage(){
            if($this->check == 1){
                $DailyWage = $this->wagePerHour * $this->fullDayHour;
                echo "Daily Employee Wage :" . $DailyWage;
            }   
        }
    }
    //Object
    $wage = new EmpWage();
    $wage->welcome();
    $wage->getNumber();
    $wage->attendance();
    $wage->getDailyWage();
?>