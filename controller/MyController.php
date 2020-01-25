<?php

include_once '../model/Mymodels.php';


//for index page//

class MyController
{
    function LoadFirst()
    {
        header('location:view/home.php');
    }

  //for faculty registration//
    public function Savedata($facultyname,$department,$email,$mobile,$address,$dob,$gender,$passwords,$status)
    {
        
        $mod=new Mymodel();
        $var = $mod->insert($facultyname,$department,$email,$mobile,$address,$dob,$gender,$passwords,$status); 
        if ($var == 'true')
        {
            header('location:login.php');
        }
    }
    //for student registartion//
    public function StudentRegister($regno,$studentname,$departmentname,$email,$dob,$gender,$address,$mobile,$passwords)
    {
       
        $mod=new Mymodel();
        $var=$mod->AdminStudentRegister($regno,$studentname,$departmentname,$email,$dob,$gender,$address,$mobile,$passwords); 
        if ($var == 'true')
        {
            header('location:adminstudent.php');
        }
    }

    //for viewing all faculty details//
    public function afacultyview()
    {
        $mod=new Mymodel();
        $var=$mod->afacultyview();
        return $var;
    }
    //for viewing all student details//
    public function astudentview()
    {
        $mod=new Mymodel();
        $var=$mod->astudentview();
        return $var;
    }
    //for approve application of faculty// 
    public function Approve($fid)
    {
        include_once  '../model/Mymodels.php';
        $mod=new Mymodel();
        $var=$mod->Approve($fid);
        if ($var == 'true')
        {
            header('location:adminhome.php');
        }
    }

    //for login //
    public function LoginAct($email,$passwords)
    {
        $mod1=new Mymodel();
        $var = $mod1->search($email,$passwords);
         
        if ($var == 'admin')
        {
            header('location:adminhome.php');
        }
        else if($var == 'faculty')
        {
            header('location:facultyhome.php');  
        }
        else if($var == 'student')
        {
            header('location:studenthome.php');  
        }
        else
        {
            echo "password or username incorrect";
        }

    }
    //for viewing sem details//
    public function asemviewcs()
    {
        $mod=new Mymodel();
        $var=$mod->asemviewcs();
        return $var;
    }

    public function asemviewcom()
    {
        $mod=new Mymodel();
        $var=$mod->asemviewcom();
        return $var;
    }



    //for add sem details//
    public function Cssemdata($sem,$department,$subject1,$subject2,$subject3,$subject4)
    {
        
        $mod=new Mymodel();
        $var = $mod->Cssemdata($sem,$department,$subject1,$subject2,$subject3,$subject4); 
        if ($var == 'true')
        {
            header('location:adminhome.php');
        }
    }

    //for edit faculty details//
    public function editfac($fid,$facultyname,$department,$email,$mobile,$address,$dob,$gender,$passwords)
    {
        
        $mod=new Mymodel();
        $var = $mod->editfac($fid,$facultyname,$department,$email,$mobile,$address,$dob,$gender,$passwords); 
        if ($var == 'true')
        {
            header('location:facultyprofile.php');
        }
    }


    public function editsem($semid,$sem,$department,$subject1,$subject2,$subject3,$subject4)
    {
        
        $mod=new Mymodel();
        $var = $mod->editsem($semid,$sem,$department,$subject1,$subject2,$subject3,$subject4); 
        if ($var == 'true')
        {
            header('location:facultysem.php');
        }
    }
    public function addnotices($title,$beginningdate,$author,$endingdate,$description)
    {
        
        $mod=new Mymodel();
        $var = $mod->addnotices($title,$beginningdate,$author,$endingdate,$description); 
        if ($var == 'true')
        {
            header('location:adminhome.php');
        }
    }

    public function adminviewnotice()
    {
        $mod=new Mymodel();
        $var=$mod->adminviewnotice();
        return $var;
    }

    public function editnotices($noticeid,$title,$beginningdate,$author,$endingdate,$description)
    {
        
        $mod=new Mymodel();
        $var = $mod->editnotices($noticeid,$title,$beginningdate,$author,$endingdate,$description); 
        if ($var == 'true')
        {
            header('location:adminviewnotices.php');
        }
    }
    public function addfacnotices($title,$beginningdate,$author,$endingdate,$description)
    {
        
        $mod=new Mymodel();
        $var = $mod->addfacnotices($title,$beginningdate,$author,$endingdate,$description); 
        if ($var == 'true')
        {
            header('location:facultyhome.php');
        }
    }

    public function faceditnotices($noticeid,$title,$beginningdate,$author,$endingdate,$description)
    {
        
        $mod=new Mymodel();
        $var = $mod->editnotices($noticeid,$title,$beginningdate,$author,$endingdate,$description); 
        if ($var == 'true')
        {
            header('location:facultyviewnotices.php');
        }
    }

    public function editstud($studid,$regno,$studentname,$departmentname,$email,$mobile,$address,$dob,$gender,$passwords)
    {
        
        $mod=new Mymodel();
        $var = $mod->editstud($studid,$regno,$studentname,$departmentname,$email,$mobile,$address,$dob,$gender,$passwords); 
        if ($var == 'true')
        {
            header('location:studentprofile.php');
        }
    }

    public function facaddtimetable($department,$sem,$day,$hour1,$hour2,$hour3,$hour4)
    {
        
        $mod=new Mymodel();
        $var = $mod->facaddtimetable($department,$sem,$day,$hour1,$hour2,$hour3,$hour4); 
        if ($var == 'true')
        {
            header('location:facultyhome.php');
        }
    }



   
}


?>