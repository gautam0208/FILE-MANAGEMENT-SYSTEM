<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            margin:0;
            padding:0;
        }
.top{

    height:50px;
    background-color: #333;
}
a{
  padding-top:20px;
    color:white;
   padding:15px 14px;
    text-decoration: none;
    font-size:18px;
    float:left;
}
a:hover{
    background-color: white;
    color:#333;
}
a.active{
    background-color:white;
    color:#333;
}
.logout {
    float:right;
    color:white;
    display:inline;
}
p{
    font-size:24px;
    border-bottom:2px solid gray;
    margin-left:10%;
    width:80%;
}

input,select{
    margin-top:10px;
    height:30px;
    width:400px;
    border-radius:5px;
}
#text{
    font-size: 18px;
    font-weight: 1000;
    color:royalblue;
    background-color: wheat;
}
#upd{
    text-align: center;
    font-size: 24px;
    background-color: lightblue;
}
#upd:hover{
    background-color: green;
    color:white;
}

  .content{
    width:40%;
    margin-top:7%;
    margin-left:30%;
    background-color: lightgray;
    border-radius:10px;
    box-shadow: 4px 4px 10px 8px gray;
  }
        </style>

    </head>
    <body>
    <div class="top">
          <a  href="employeedashboard.php">Employee Dashboard</a>
          <a href="uploadFile.php">Upload File</a>
          <a href="emp_viewFile.php">View File</a>
          <a class="active" href="updUser.php">Update Details</a>

          <span class="logout">
          <a href="employeeprofile.php"><i class="fa fa-users" aria-hidden="true"> My Profile</i></a>
            <a href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
          </span>
       </div>
       <p>Update User</p>
<form action="" method="post">
<div class="content">
                <center>
                    <br><br>
                <input type="text" name="uname" id="uname" placeholder="Enetr Username" required><br><br>
                 <select name="select">
                 <option>Choose Option To Update</option>
                    <option value="FULLNAME" >Full Name</option>
                    <option value="USERNAME" >Username</option>
                    <option value="PASSWORD" >Password</option>
                    <option value="ADDRESS" >Address</option>
                    <option value="CITY" >City</option>
                    <option value="STATE_PROVIENCE_REGION" >State/provience/Region</option>
                    <option value="POSTALCODE_ZIP" >Postal Code/ZIP</option>
                    <option value="POSITION" >Position</option>
                    <option value="EMAIL" >Email</option>
                    <option value="PERMISSION_LEVEL" >Permission Level</option>
                 </select><br><br>
                 <input type="text" name="val" id="val" placeholder="Enetr Value To Update" required><br><br>
                 <input type="submit" id="upd" name="submit" value="Update"><br><br><br><br>

                </center>
               
        </div>

</form>

    </body>
</html>
<?php

include 'dbConfig.php';

if(isset($_POST['submit'])){
  $uname=$_POST['uname'];
  $select=$_POST['select'];
  $val=$_POST['val'];
 
   $s="select * from employee_profile where USERNAME='$uname'" ;
$result=mysqli_query($conn,$s);
$row=mysqli_num_rows($result);

if($row==1){
    
    $sql="update  employee_profile set $select='$val'  where USERNAME='$uname' ";
    $query=mysqli_query($conn,$sql);


    if($query)
    {
        $msg="USER PROFILE UPDATED SUCCESSFULLY!!!";
        echo "<script type='text/javascript'>alert('$msg'); </script> ";
    }
    else
        echo "Error:".$sql_query." ".mysqli_error($conn);

}
else{
    $msg="USERNAME NOT FOUND!!!";
    echo "<script type='text/javascript'>alert('$msg'); </script> ";
}
       
            
 }   
?>