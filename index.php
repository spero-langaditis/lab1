<!DOCTYPE html>
<!-- Student Webapp -->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');
        
        $students = array();
        
        //creates the first student.
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        //creates a second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        //creates a third student
        $third = new Student();
        $third->surname = "Langaditis";
        $third->first_name = "Speridon";
        $third->add_email('home', 'slangaditis94@hotmail.com');
        $third->add_grade(100);
        $third->add_grade(100);
        $students['s789'] = $third;
        
        //sorts the students alphabetically
        ksort($students);
        
        //displays all the students
        foreach ($students as $student)
            echo $student->toString();

        ?>
    </body>
</html>
