<?php
include '../controller/MyController.php';
$obj=new MyController();
if(isset($_POST['submit']))
{
    $facultyname=$_POST['facultyname'];
    $department=$_POST['department'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $passwords=$_POST['password'];
    $status='pending';
    $obj->Savedata($facultyname,$department,$email,$mobile,$address,$dob,$gender,$passwords,$status);
}
?>	




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName"> Name</label><input class="form-control py-4" id="inputFirstName" type="text"  required name="facultyname"/></div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Department</label><input class="form-control py-4" id="inputLastName" type="text" name="department" /></div>
                                                </div>
                                            
                                            <div class="form-group col-md-8"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp"  name="email" required/></div>
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-8"><label class="small mb-1" >Mobile</label><input class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp"  name="mobile" required/></div>
                                            <div class="form-group col-md-8"><label class="small mb-1">Address</label><textarea name="address"  class="form-control py-4">   </textarea></div>
                                            <div class="form-group col-md-8"><label class="small mb-1">DOB</label><input class="form-control py-4"  type="date" aria-describedby="emailHelp"  name="dob" required/></div>
                                            <div class="form-group col-md-8"><label class="small mb-1">Gender</label><input class="form-control py-4"  type="text" aria-describedby="emailHelp"  name="gender" required/></div>
                                            
                                            
                                           
                                                <div class="col-md-8">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password"  name="password" required/></div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label><input class="form-control py-4" id="inputConfirmPassword" type="cnfrmpassword" required/></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0 pl-5 pr-5"><input type="submit" vlaue="Create Account" class="btn btn-primary btn-block" name="submit"></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
