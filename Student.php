<?php

/**
 * Student class represents a student
 *
 * @author Speridon Langaditis
 */
class Student {

    // sets up a student
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //adds the email to the student
    function
    add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    //adds the grade to the student
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //calculates the average for all the students grades
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total /
                count($this->grades);
    }

    //puts the student into a string to be displayed
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= '(' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
