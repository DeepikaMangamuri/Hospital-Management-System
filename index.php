<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>HMS</title>
    <link rel="stylesheet" href="indexHMS.css">
</head>

<body style="background-color: #E8F9FD;">

    <center>
        <h1 style="color: #B20600;" class="mt-3">Welcome to VITAP Health Care</h1>
    </center>
    <hr>

    <center><img src="./images/vitapbg.png" class="img-fluid" alt="VITAP"></center>
    <br>
    <div class="container mb-3 mt-2">
        <h3 class="mt-3">Services available</h3> <br>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">VITAP Doctors</h5>
                        <a href="./dlist.php" class="btn btn-success">Doctors Module</a>
                    </div>
                </div>
            </div>

            <!-- For Receptionists -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">VITAP Receptionists</h5>
                        <a href="./dlist.php" class="btn btn-success">Receptionist Module</a>
                    </div>
                </div>
            </div>

            <!-- For Patients -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">VITAP Patients</h5>
                        <a href="./plist.php" class="btn btn-success">Patients Module</a>
                    </div>
                </div>
            </div>

            <!-- For Appointments -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">VITAP Appointments</h5>
                        <a href="./alist.php" class="btn btn-success">Appointments Module</a>
                    </div>
                </div>
            </div>

            <!-- For Admin -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <!-- <h5 class="card-title">ADMIN LOGIN</h5> -->
                        <a href="./adminlogin.php" class="btn btn-success">LOGIN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <a style="text-decoration: none; color:black" href="./dlist.php">Doctors Module</a> <br>
    <a style="text-decoration: none; color:black" href="./dlist.php">Receptionist Module</a> <br>
    <a style="text-decoration: none; color:black" href="./plist.php">Patients Module</a> <br>
    <a style="text-decoration: none; color:black" href="./alist.php">Appointments Module</a> <br> -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>