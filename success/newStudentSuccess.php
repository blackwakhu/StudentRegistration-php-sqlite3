<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../forms/newStudent.php">New Student</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="allStudents.php">All Students</a>
              </li>
            </ul>
          </div>
        </nav>
        <?php
            require '../tables/StudentClass.php';
            
            $student = new StudentClass();
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $admin = $_POST['admin'];
            $age = $_POST['age'];
            $school = $_POST['school'];
            $dept = $_POST['dept'];
            $dateEn = $_POST['dateEn'];
            $dorm = $_POST['dorm'];
            $club = $_POST['club'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            
            $student->insert($admin, $fname, $lname, $age, $school, $dept, $dateEn, 
                    $dorm, $club, $gender, $email);
            
            $txt =<<<EOF
                    <div class="alert alert-success" role="alert">
                        The details of $fname $lname of admission number $admin have been saved
                    </div>
                    EOF;
            
            echo $txt;
        ?>
        
        <script src="../bootstrap/js/bootstrap.js"></script>
    </body>
</html>
