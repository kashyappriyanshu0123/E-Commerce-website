<!doctype html>
<html>
    <head>
    <title>Admin Login Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script> -->
      <style>
          body{
            background: url('images7.png')no-repeat center fixed;
            background-size: cover;
              display:flex;
              flex-direction:column;
              text-align:right;
              opacity:0.8;
          }
          p{
              font-size:20px;
          }
          #had{
              font-size:60px;
               color:pink;
          }
          #main{
           margin-right:10%;
           margin-top:10%;
          }
             /* p{
              margin-top:5%;
              margin-right:15%;
               } */
           @media screen and (max-width:800px){
            p{
              margin-top:10%;
              margin-right:15%;
               }
               #subbox{
                   margin-top:10%;
                   margin-right:18%;
               }
            }
         @media screen and (min-width:800px){
            p{
                 margin-top:4%;
                 margin-right:6%;
             }
             #subbox{
                   margin-top:4%;
               }
            }  
          #sub{
              margin-right:10%;
              font-size:25px;
              background-color:black;
              color:wheat;
              border:4px solid red;
          }
          #sub:hover{
            font-size:30px;
              background-color:yellow;
              color:red;
              border:4px solid pink;
              cursor: pointer;
          }
      </style>
</head>
    <body>
        <!-- <center><br><br> -->
        <div id="main">
        <h1 id="had">Admin Login</h1>
        <form action=" " method="post">
           <p> Email:<input type="text" name="email" id="em" required></p>
            
           <p> Password:<input type="password" name="password" id="pas" required></p>
           
           <div id=subbox>
               <input type="submit" name="submit" id="sub">
           </div> 
            <?php
            session_start();
            $email="";
            $name="";
            if(isset($_POST['submit']))
            {
                $connection=mysqli_connect("localhost","root","" );
                $db=mysqli_select_db($connection,"sms");
                $query = "select * from login where email = '$_POST[email]'";
                $query_run=mysqli_query($connection,$query);
                while($row=mysqli_fetch_assoc($query_run))
                {
                   if($row['Email']==$_POST['email']){
                       if($row['Password']==$_POST['password'])
                          { 
                              $_SESSION['email']=$row['Email'];
                              $_SESSION['name']=$row['Name'];
                                header("Location: admin_dashboard.php");
                          }
                    else
                       {echo "<br><br>Wrong Password !!!";}
                   }
                   else 
                     echo "<br><br>Wrong Email ID";
                }

            }
            ?>

         </form>
         </div>
        <!-- </center> -->
</body>
</html>