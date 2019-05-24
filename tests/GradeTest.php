<?php
require_once("./src/Grade.php");

class GradeTest extends PHPUnit_Framework_TestCase
{
    public function testNullInitWithoutValue(){
        $expected = 0;
        $o = new Grade();
        $this->assertEquals($expected, $o->getScore());
    }

    public function testEqualInitWithValue(){
        $input = 13;
        $o = new Grade($input);
        $this->assertEquals($input, $o->getScore());
    }

    public function testEqualInitSetValue(){
        $input = 15;
        $o = new Grade();
        $o->setScore($input);
        $this->assertEquals($input, $o->getScore());
    }

    public function testNullWithLowerZero(){
        $expected = -1;
        $input = -1;
        $o = new Grade($input);
        $this->assertEquals($expected, $o->getScore());
    }

    public function testNullWithSetValueLowerZero(){
        $expected = -1;
        $input = -1;
        $o = new Grade();
        $o->setScore($input);
        $this->assertEquals($expected, $o->getScore());
    }

    public function testNullWithMoreThan100(){
        $expected = -1;
        $input = 101;
        $o = new Grade($input);
        $this->assertEquals($expected, $o->getScore());
    }

    public function testNullWithSetValueMoreThan100(){
        $expected = -1;
        $input = 102;
        $o = new Grade();
        $o->setScore($input);
        $this->assertEquals($expected, $o->getScore());
    }

    public function testEqualWithZero(){
        $input = 0;
        $o = new Grade($input);
        $this->assertEquals($input, $o->getScore());
    }

    public function testEqualWithSetValueZero(){
        $input = 0;
        $o = new Grade();
        $o->setScore($input);
        $this->assertEquals($input, $o->getScore());
    }

    public function testEqualWith100(){
        $input = 100;
        $o = new Grade($input);
        $this->assertEquals($input, $o->getScore());
    }

    public function testEqualWithSetValue100(){
        $input = 100;
        $o = new Grade();
        $o->setScore($input);
        $this->assertEquals($input, $o->getScore());
    }

    public function testEqualAWith100(){
        $input = 100;
        $expected = "A";

        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->getGrade());
    }

    public function testEqualAWith80(){
        $input = 80;
        $expected = "A";

        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->getGrade());
    }

    public function testEqualBWith79(){
        $input = 79;
        $expected = "B";

        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->getGrade());
    }

    public function testEqualBWith70(){
        $input = 70;
        $expected = "B";

        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->getGrade());
    }

    public function testEqualCWith69(){
        $input = 69;
        $expected = "C";

        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->getGrade());
    }

    public function testEqualCWith60(){
        $input = 60;
        $expected = "C";

        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->getGrade());
    }

    public function testEqualDWith59(){
        $input = 59;
        $expected = "D";

        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->getGrade());
    }

    public function testEqualDWith50(){
        $input = 50;
        $expected = "D";

        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->getGrade());
    }

    public function testEqualFWith49(){
        $input = 49;
        $expected = "F";

        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->getGrade());
    }

    public function testEqualFWith0(){
        $input = 0;
        $expected = "F";

        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->getGrade());
    }

    public function testEqualEmptyWithoutValue(){
        $expected = "Grade: ";
        $o = new Grade();
        $this->assertEquals($expected, $o->toString());
    }

    public function testErrorOver100(){
        $input = 101;
        $expected = "Grade: error";
        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->toString());
    }

    public function testEqualFWithoutValue(){
        $expected = "Grade: F";
        $o = new Grade();
        $o->calculate();
        $this->assertEquals($expected, $o->toString());
    }

    public function testEqualGradeAWithValue90(){
        $expected = "Grade: A";
        $input = 90;
        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->toString());
    }

    public function testEqualGradeBWithValue75(){
        $expected = "Grade: B";
        $input = 75;
        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->toString());
    }
    
    public function testEqualGradeCWithValue65(){
        $expected = "Grade: C";
        $input = 65;
        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->toString());
    }

    public function testEqualGradeDWithValue55(){
        $expected = "Grade: D";
        $input = 55;
        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->toString());
    }

    public function testEqualGradeFWithValue30(){
        $expected = "Grade: F";
        $input = 30;
        $o = new Grade($input);
        $o->calculate();
        $this->assertEquals($expected, $o->toString());
    }
}