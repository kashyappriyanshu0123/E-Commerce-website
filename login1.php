<!DOCTYPE html>
<html>
<head>
       <title>Login Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script> -->
      <style>
          body{
background: url('student.png')no-repeat center fixed;
background-size: cover;
opacity: 0.8;
}
h1{
    text-align: center;
    background-color: rgb(53, 50, 50);
    color: bisque;
}
@media screen and (max-width:800px) {
    h1{
        margin-top: 20%;
    }
    div{
        margin-top:20% ;
    }
}
@media screen and (min-width:800px) {
    h1{
        margin-top: 5%;
    }
    div{
        margin-top:10% ;
    }
}
div{
    text-align: center;
}
 #admin,#student{
     text-transform: uppercase;
     border-width: 10px;
}
#student{
    margin-left: 5%;
}


#admin:hover{
    border-width: 15px;
    background-color: rgb(14, 14, 15);
    color: wheat;
    border-radius: 20px;
    cursor: pointer;
}
#student:hover{
    border-width: 15px;
    background-color: rgb(0, 0, 0);
    color: wheat;
    border-radius: 20px;
    cursor: pointer;
}
      </style>
</head>
<body>
    <!-- <center><br><br> -->
        <h1>Student Management System</h1>
            <div>
                <input type="submit" name="admin_login" value=" Admin   Login" id="admin">
                <input type="submit" name="student_login" value="Student   Login" id="student">
            </div>
            
        <?php
              if(isset($_POST['admin_login']))
              {
                    header("Location: adminlogin.php");
              }
             if(isset($_POST['student_login']))
                 header("Location: studentlogin.php");
             
        ?>
    <!-- </center> -->
</body>
</html>