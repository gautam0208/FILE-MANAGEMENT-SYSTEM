<!DOCTYPE html>
<html>
    <head>
    <style>
body{
    background-color: white;
}
   div{
    color:lightgray;
    text-align: center;
    background-color:#00203FFF;
    height:320px;
    width:640px;
    margin-top:5%;
    margin-left:30%;
    box-shadow: 4px 4px 10px 8px gray;
   }
   input{
    width:420px;
    height:25px;
    margin-left:20px;
   }
   #register{
         height:30px;
         width:80px;
         float:right;
         margin-right:20px;
         font-size: 18px;
         background-color: gray;
         color:black;
   }
   a{
    float:left;
    color:#FCF6F5FF;
    margin-left:20px;
    font-size:18px;

   }
   h2{
    margin-top: 100px;
   }

   #register:hover{
    background-color:white;
    color:black;
   }
        </style>

    </head>
    <body>
    <form action="?" method="post">
        
            <div>
                <h2>Admin Register Dashboard</h2>
                <input type="text" name="uname" id="uname" placeholder="username" required ><br><br>
                <input type="password" name="psw1" id="psw1" placeholder="password" required ><br><br>
                <input type="password" name="psw2" id="psw3" placeholder="confirm password" required ><br><br>
                <input type="submit" name="submit" id="register" value="Register"><br><br>
                
               <a href="adminlogin.php">Login</a><br><br>
               <a href="homepage.php">go to homepage</a><br><br>

            </div>
       
    </form>

    </body>
</html>
<?php
  include 'dbConfig.php';

  if(isset($_POST['submit'])){
     $uname=$_POST['uname'];
     $psw1=$_POST['psw1'];
     $psw2=$_POST['psw2'];

    $s="select * from admin_register where Username='$uname' ";
    $data=mysqli_query($conn,$s);
    $row=mysqli_num_rows($data);

    if($row==1)
    {
        $msg1="Admin Already Registered!!!";
        $msg2="Try With Another Admin!!!";
        echo "<script type='text/javascript'>alert('$msg1 $msg2'); </script> ";
    }

    else{
        $sql="insert into admin_register (Username,Password)
        values('$uname','$psw1')";
        $query=mysqli_query($conn,$sql);

        if($query)
        {
            header("location:adminlogin.php");
        }
        else
        echo "Error:".$sql_query." ".mysqli_error($conn);
    }

   
  }
   
?>