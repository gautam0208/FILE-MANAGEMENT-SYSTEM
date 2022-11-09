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
   #uname,#psw{
    width:420px;
    height:25px;
    margin-left:20px;
   }
   #login{
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
   #login:hover{
    background-color:white;
    color:black;
   }
  
        </style>

    </head>
    <body>
    <form action="" method="post">
            <div>
                <h2>Employee Login Dashboard</h2>
                <input type="text" name="uname" id="uname" value="<?php if(isset($_COOKIE["username2"])) { 
                                    echo $_COOKIE["username2"]; } ?>" placeholder="username" required ><br><br>
                <input type="password" name="psw" id="psw" value="<?php if(isset($_COOKIE["password2"])) { 
                                               echo $_COOKIE["password2"]; } ?>" placeholder="password" required ><br><br>

             <input type="checkbox" name="remember" checked id="rem" > Remember me  <br>

                <input type="submit" name="submit" id="login" value="Login"><br><br>
                <a href="reset_emp.php">Forget Password</a><br><br>
               <a href="homepage.php">go to homepage</a><br><br>

            </div>
       
    </form>

    </body>
</html>
<?php
  session_start();

include 'dbConfig.php';


if(!empty($_POST["remember"])) {  
  setcookie ("username2",$_POST["uname"],time()+ 60*60*24*30,'/');  
  setcookie ("password2",$_POST["psw"],time()+ 60*60*24*30,'/');  
// echo "Cookies Set Successfuly"; 
} 
else 
{  
 setcookie("username2","");  
 setcookie("password2","");  
 //echo "Cookies Not Set"; 
} 

if(isset($_POST['submit'])){
  $name=$_POST['uname'];
  $pass=$_POST['psw'];
$sql="SELECT * from employee_profile where USERNAME='$name' && PASSWORD ='$pass' ";

 $result=mysqli_query($conn, $sql);
 $row=mysqli_num_rows($result);
 
     if($row==1)
   {
     $_SESSION["username"]=$name;
     $_SESSION["loggedin"]=true;
      header('location:employeedashboard.php');
       
    }
    else{
       
        $message = "LOGIN FAILED DUE TO WRONG CREDENTIALS !!! ";
       echo "<script type='text/javascript'>alert('$message');</script>";
            
        }

}
      
?>