<?php

/**
 * Description of StudentClass
 *
 * @author derrickws
 */

require '../database/MyDb.php';

class StudentClass {
    //put your code here
    function __construct() {
      $this->db = new MyDb();
    }
    
    function insert($admin, $fname, $lname, $age, $school, $department, $date, $dorm, $club, $gender, $email){
      $sql =<<<EOF
                insert into students (adminNo, firstname, lastname, age, school, department, dateEnrolled, dorm, club, gender, email)
                values ('$admin', '$fname', '$lname', '$age', '$school', '$department', '$date', '$dorm', '$club', '$gender', '$email');
                EOF;
      $this->db->exec($sql);
    }
}
