<?php
    class EmpWage{
        //variable
        public $check1;
        public $check2;
        private $wagePerHour = 20;
        private $empHrs;
        public $numOfWorkingDays = 20;
        public $monthlyWage;

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

        //Function to calculate monthly employee wage according to part time and full time
        public function calculateWage($num){
            if($this->check1 == 1){
                switch($num){
                    case 1:
                        $this->empHrs = 8;
                        break;

                    case 2:
                        $this->empHrs = 4;
                        break;
                }
                $DailyWage = $this->wagePerHour * $this->empHrs;
                $this->monthlyWage += $DailyWage;
            }
        }
    }
    //Object
    $wage = new EmpWage();
    $wage->welcome();
    $day = 1;
    //20 working day per month
    while($day <= 20){
        $wage->check1 = $wage->getNumber();
        $wage->attendance();
        $wage->check2 = $wage->getNumber();
        $wage->calculateWage($wage->check2);
        $day++;
    }
    echo "Monthly Wage Employee Wage :" . $wage->monthlyWage;
?>