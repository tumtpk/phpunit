<?php

class Grade{
    // attribute
    public $score=-1;
    public $grade;

    // constructor
    public function __construct($score = 0){
        if($score >= 0 && $score <= 100){
            $this->score = $score;
        }else{
            $this->score = -1;
        }
    }

    //method
    public function setScore($score){
        if($score >= 0 && $score <= 100){
            $this->score = $score;
        }else{
            $this->score = -1;
        }
    }

    public function getScore(){
        return $this->score;
    }

    public function calculate(){
        if($this->score == -1){
            $this->grade = "error";
        }else if($this->score >= 80){
            $this->grade = "A";
        }else if($this->score >= 70){
            $this->grade = "B";
        }else if($this->score >= 60){
            $this->grade = "C";
        }else if($this->score >= 50){
            $this->grade = "D";
        }else{
            $this->grade = "F";
        }
    }

    public function getGrade(){
        return $this->grade;
    }
    
    public function toString(){
        return "Grade: ".$this->getGrade();
    }

}

?>