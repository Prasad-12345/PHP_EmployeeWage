<?php
    class EmpWage{
        //variable
        public $check1;
        public $check2;
        private $wagePerHour = 20;
        private $empHrs;

        //Function to display welcome message
        public function welcome(){
            echo "Welcome to employee wage computation program \n";
        }

        //Function to generate randon number between 1 to 2
         public function getNumber(){
            $check = rand(1, 2);
            return $check;
        }

        //Function to check employee is present or absent
        public function attendance(){
            if($this->check1 == 1){
                echo "Employee is present \n";
            }
            else{
                echo "Employee is absent \n";
            }
        }

        //Function to calculate daily employee wage according to part time and full time
        public function getDailyWage($check1){
            if($this->check1 == 1){
                switch($check1){
                    case 1:
                        $this->empHrs = 8;
                        break;

                    case 2:
                        $this->empHrs = 4;
                        break;
                }
                $DailyWage = $this->wagePerHour * $this->empHrs;
                echo "Daily Employee Wage :" . $DailyWage;
            }
        }
    }
    //Object
    $wage = new EmpWage();
    $wage->welcome();
    $wage->getNumber();
    $wage->check1 = $wage->getNumber();
    $wage->attendance();
    $wage->check2 = $wage->getNumber();
    $wage->getDailyWage($wage->check2);
?>