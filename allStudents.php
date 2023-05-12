<!doctype html>
<html>
    <head>
        <title>all Students</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css"/>
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
        <h1>All Students</h1>
        <?php
        require '../database/MyDb.php';
        $db = new MyDb();
        $sql =<<<EOF
                select * from students;
                EOF;
        $ret = $db->query($sql);
        $txt1 =<<<EOF
                <table class="table table-bordered table-hover table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Admin</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">School</th>
                            <th scope="col">Department</th>
                            <th scope="col">Date Enrolled</th>
                            <th scope="col">Dorm</th>
                            <th scope="col">Club</th>
                        </tr>
                    </thead>
                    <tbody>
                EOF;
        $num = 1;
        echo $txt1;
        while($row = $ret->fetchArray(SQLITE3_ASSOC)){
            echo '<tr>';
            echo '<th scope="row">'.$num.'</th>';
            echo '<td>'.$row['adminNo'].'</td>';
            echo '<td>'.$row['firstname'].'</td>';
            echo '<td>'.$row['lastname'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '<td>'.$row['age'].'</td>';
            echo '<td>'.$row['gender'].'</td>';
            echo '<td>'.$row['school'].'</td>';
            echo '<td>'.$row['department'].'</td>';
            echo '<td>'.$row['dateEnrolled'].'</td>';
            echo '<td>'.$row['dorm'].'</td>';
            echo '<td>'.$row['club'].'</td>';            
            echo '</tr>';
            $num = $num + 1;
        }
        $txt3 =<<<EOF
                    </tbody>
                </table>
                EOF;
        echo $txt3;
        ?>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </body>
</html>
