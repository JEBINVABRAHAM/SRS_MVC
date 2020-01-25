<?php
  
    class Mymodel
    {
        function insert($facultyname,$department,$email,$mobile,$address,$dob,$gender,$passwords,$status)
        {
            include '../config/connection.php';
            $sql="INSERT INTO faculty(facultyname,department,email,mobile,address,dob,gender,password,status)VALUES('".$facultyname."','".$department."','".$email."','".$mobile."','".$address."','".$dob."','".$gender."','".$passwords."','".$status."')";
            if(mysqli_query($conn,$sql))
            {
                return true;
            }
        }
        function Approve($fid)
        {
            include '../config/connection.php';
	        $sql="UPDATE faculty SET status='Approved' where fid='".$fid."'";                                    
            if(mysqli_query($conn,$sql))
            {
                return true;
            }

        }	

        function afacultyview()
        {
            include '../config/connection.php';
	        $sql="SELECT * from faculty";                                    
            if(mysqli_query($conn,$sql))
            {
                $result=mysqli_query($conn,$sql);
                return $result;
            }

        }	

        function astudentview()
        {
            include '../config/connection.php';
	        $sql="SELECT * from student";                                    
            if(mysqli_query($conn,$sql))
            {
                $result=mysqli_query($conn,$sql);
                return $result;
            }

        }
        
        function AdminStudentRegister($regno,$studentname,$departmentname,$email,$dob,$gender,$address,$mobile,$passwords)
        {
            include '../config/connection.php';
            $sql="INSERT INTO student(regno,studentname,departmentname,email,dob,gender,address,mobile,password)VALUES('".$regno."','".$studentname."','".$departmentname."','".$email."','".$dob."','".$gender."','".$address."','".$mobile."','".$passwords."')";
            if(mysqli_query($conn,$sql))
            {
                return true;
            }
        

        }
        function search($email,$passwords)
        {
            include '../config/connection.php';
            $sql="SELECT * FROM admin WHERE email='".$email."' and password='".$passwords."'";
            $result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
                
                return 'admin';
            }
            else
            {
                include '../config/connection.php';
                $sql="SELECT * FROM faculty WHERE email='".$email."' and password='".$passwords."'";
                $result=mysqli_query($conn,$sql);
			    if(mysqli_num_rows($result)>0)
			    {
                    while($row=mysqli_fetch_assoc($result))
                    {
                    session_start();
                    $_SESSION['fac_id']=$row['fid'];
                    $_SESSION['dep']=$row['department'];
                    return 'faculty';
                    }
                }
            
                else
                {
                include '../config/connection.php';
                $sql="SELECT * FROM student WHERE email='".$email."' and password='".$passwords."'";
                $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                        session_start();
                        $_SESSION['studid']=$row['studid'];
                        $_SESSION['dep']=$row['departmentname'];
                        return 'student';
                        }
                    }
                }
            }


        }

        function asemviewcs()
        {
            include '../config/connection.php';
	        $sql="SELECT * from semester WHERE department='CS'";                                    
            if(mysqli_query($conn,$sql))
            {
                $result=mysqli_query($conn,$sql);
                return $result;
            }

        } 

        function asemviewcom()
        {
            include '../config/connection.php';
	        $sql="SELECT * from semester WHERE department='commerce'";                                    
            if(mysqli_query($conn,$sql))
            {
                $result=mysqli_query($conn,$sql);
                return $result;
            }

        } 


        
        function Cssemdata($sem,$department,$subject1,$subject2,$subject3,$subject4)
        {
            include '../config/connection.php';
            $sql="INSERT INTO semester(sem,department,subject1,subject2,subject3,subject4)VALUES('".$sem."','".$department."','".$subject1."','".$subject2."','".$subject3."','".$subject4."')";
            if(mysqli_query($conn,$sql))
            {
                return true;
            }
        }

        function editfac($fid,$facultyname,$department,$email,$mobile,$address,$dob,$gender,$passwords)
        {
            include '../config/connection.php';
            $sql="UPDATE faculty SET facultyname='".$facultyname."',department='".$department."',email='".$email."',mobile='".$mobile."',address='".$address."',dob='".$dob."',gender='".$gender."',password='".$passwords."' WHERE fid='".$fid."'";
            if(mysqli_query($conn,$sql))
            {
                return true;
            }
        }



        function editsem($semid,$sem,$department,$subject1,$subject2,$subject3,$subject4)
        {
            include '../config/connection.php';
            $sql="UPDATE semester SET sem='".$sem."',department='".$department."',subject1='".$subject1."',subject2='".$subject2."',subject3='".$subject3."',subject4='".$subject4."' WHERE semid='".$semid."'";
            if(mysqli_query($conn,$sql))
            {
                return true;
            }
        }

        function addnotices($title,$beginningdate,$author,$endingdate,$description)
        {
            include '../config/connection.php';
            $sql="INSERT INTO notices(title,beginningdate,author,endingdate,description)VALUES('".$title."','".$beginningdate."','".$author."','".$endingdate."','".$description."')";
            if(mysqli_query($conn,$sql))
            {
                return true;
            }
        }

        function adminviewnotice()
        {
            include '../config/connection.php';
	        $sql="SELECT * from notices";                                    
            if(mysqli_query($conn,$sql))
            {
                $result=mysqli_query($conn,$sql);
                return $result;
            }

        } 

        function editnotices($noticeid,$title,$beginningdate,$author,$endingdate,$description)
        {
            include '../config/connection.php';
            $sql="UPDATE notices SET title='".$title."',beginningdate='".$beginningdate."',author='".$author."',endingdate='".$endingdate."',description='".$description."' WHERE noticeid='".$noticeid."'";
            if(mysqli_query($conn,$sql))
            {
                return true;
            }
        }

        function addfacnotices($title,$beginningdate,$author,$endingdate,$description)
        {
            include '../config/connection.php';
            $sql="INSERT INTO notices(title,beginningdate,author,endingdate,description)VALUES('".$title."','".$beginningdate."','".$author."','".$endingdate."','".$description."')";
            if(mysqli_query($conn,$sql))
            {
                return true;
            }
        }

        function faceditnotices($noticeid,$title,$beginningdate,$author,$endingdate,$description)
        {
            include '../config/connection.php';
            $sql="UPDATE notices SET title='".$title."',beginningdate='".$beginningdate."',endingdate='".$endingdate."',description='".$description."' WHERE noticeid='".$noticeid."' AND author='".$author."'";
            if(mysqli_query($conn,$sql))
            {
                return true;
            }
        }

        function editstud($studid,$regno,$studentname,$departmentname,$email,$mobile,$address,$dob,$gender,$passwords)
        {
            include '../config/connection.php';
            $sql="UPDATE student SET studentname='".$studentname."',departmentname='".$departmentname."',email='".$email."',mobile='".$mobile."',address='".$address."',dob='".$dob."',gender='".$gender."',password='".$passwords."' WHERE studid='".$studid."'";
            if(mysqli_query($conn,$sql))
            {
                return true;
            }
        }

        function facaddtimetable($department,$sem,$day,$hour1,$hour2,$hour3,$hour4)
        {
            include '../config/connection.php';
            $sql="INSERT INTO timetable(department,sem,day,hour1,hour2,hour3,hour4)VALUES('".$department."','".$sem."','".$day."','".$hour1."','".$hour2."','".$hour3."','".$hour4."')";
            if(mysqli_query($conn,$sql))
            {
                return true;
            }
        }


        

    }    

 ?>