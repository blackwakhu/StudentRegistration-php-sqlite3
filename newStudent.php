<!doctype html>
<html>
    <head>
        <title>new Student</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="newStudent.php">New Student</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../success/allStudents.php">All Students</a>
              </li>
            </ul>
          </div>
        </nav>
    
        <h1>Hello new Student</h1>
        
        <div class="container border">
            <div class="my-4">
                <form action="../success/newStudentSuccess.php" method="post">
                    <div>
                        <div class="row justify-content-start my-2">
                            <div class="col-3">
                                <label for="admin" class="form-label">Admission number</label>
                            </div>
                            <div class="col-7">
                                <input type="text" name="admin" id="admin" class="form-control" placeholder="e.g. 1">
                            </div>
                        </div>
                        <div class="row justify-content-start my-2">
                            <div class="col-3">
                                <label for="fname" class="form-label">First Name</label>
                            </div>
                            <div class="col-7">
                                <input type="text" name="fname" id="fname" class="form-control" placeholder="e.g. Jane">
                            </div>
                        </div>
                        <div class="row justify-content-start my-2">
                            <div class="col-3">
                                <label for="lname" class="form-label">Surname</label>
                            </div>
                            <div class="col-7">
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="e.g. Doe">
                            </div>
                        </div>
                        <div class="row justify-content-start my-2">
                            <div class="col-3">
                                <label for="age" class="form-label">Age</label>
                            </div>
                            <div class="col-7">
                                <input type="number" min="18" max="90" name="age" id="age" class="form-control" placeholder="e.g. 18">
                            </div>
                        </div>
                        <div class="row justify-content-start my-2">
                            <div class="col-3">
                                <label for="gender" class="form-label">Gender</label>
                            </div>
                            <div class="col-7">
                                Male <input type="radio" name="gender" id="gender" value="Male" class="form-check-inline"> 
                                Female <input type="radio" name="gender" id="gender" value="Female" class="form-check-inline"> 
                                Other <input type="radio" name="gender" id="gender" value="Other" class="form-check-inline"> 
                            </div>
                        </div>
                        <div class="row justify-content-start my-2">
                            <div class="col-3">
                                <label for="email" class="form-label">Email</label>
                            </div>
                            <div class="col-7">
                                <input type="email" name="email" id="email" class="form-control" placeholder="e.g. example@example.com">
                            </div>
                        </div>
                        <div class="row justify-content-start my-2">
                            <div class="col-3">
                                <label for="school" class="form-label">School</label>
                            </div>
                            <div class="col-7">
                                <select name="school" class="form-select">
                                    <option value="Arts">Arts</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Hospitality and Tourinsm">Hospitality and Tourism</option>
                                    <option value="Medicine">Medicine</option>
                                    <option value="Nursing">Nursing</option>
                                    <option value="Pharmacy">Pharmacy</option>
                                    <option value="Pure and Applied Sciences">Pure and Applied Sciences</option>
                                    <option value="Social Sciences">Social Sciences</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-start my-2">
                            <div class="col-3">
                                <label for="dept" class="form-label">Department</label>
                            </div>
                            <div class="col-7">
                                <input type="text" name="dept" id="dept" class="form-control" placeholder="e.g. Math">
                            </div>
                        </div>
                        <div class="row justify-content-start my-2">
                            <div class="col-3">
                                <label for="dateEn" class="form-label">Date Enrolled</label>
                            </div>
                            <div class="col-7">
                                <input type="date" name="dateEn" id="dateEn" class="form-control">
                            </div>
                        </div>
                        <div class="row justify-content-start my-2">
                            <div class="col-3">
                                <label for="dorm" class="form-label">Dorm</label>
                            </div>
                            <div class="col-7">
                                <select name="dorm" class="form-select">
                                    <option value="Longonot">Longonot</option>
                                    <option value="Everest">Everest</option>
                                    <option value="Atlas">Atlas</option>
                                    <option value="Appalachians">Appalachians</option>
                                    <option value="Rookies">Rookies</option>
                                    <option value="Kilimanjaro">Kilimanjaro</option>
                                    <option value="Alps">Alps</option>
                                    <option value="Sahara">Sahara</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-start my-2">
                            <div class="col-3">
                                <label for="club" class="form-label">Clubs And Societies</label>
                            </div>
                            <div class="col-7">
                                <select name="club" class="form-select">
                                    <option value="Debating">Debating</option>
                                    <option value="IEEE">IEEE</option>
                                    <option value="Enviromental">Environmental</option>
                                    <option value="Google Developers">Google Developers</option>
                                    <option value="Robotics">Robotics</option>
                                    <option value="Judo">Judo</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Chess">Chess</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <input type="submit" value="submit" class="btn btn-success">
                            </div>
                            <div class="col-3">
                                <input type="reset" value="reset" class="btn btn-danger">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <script src="../bootstrap/js/bootstrap.js"></script>

    </body>
</html>


