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
.content{

    background-color:lightgray;
    margin-left:10%;
    border-radius:10px;
    height:80%;
    width:80%;
    box-shadow:4px 4px 10px 8px gray;
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
.dropdown_content{
    display: none;
  position: absolute;
  background-color: #f9f9f9;
  margin-top:50px;
    margin-left:39%;
}
.dropdown_content a {
    float:none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown_content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown_content {
  display: block;
}
        </style>

    </head>
    <body>
       <div class="top">
          <a  href="admindashboard.php">Admin Dashboard</a>
          <a class="active" href="adminprofile.php">Add My Profile</a>
          <a href="adminAddUser.php">Add User</a>
          <a href="view_user.php">View User</a>
          <a href="admin_viewFile.php">View File</a>

          <div class="dropdown">
          <a class="drpbtn" href="">Update</a>
          <div class="dropdown_content">
          <a href="updateAdmin.php">ADMIN PROFILE</a>
                <a href="updateUser.php">USER PROFILE</a>
          </div>

          </div>

          <span class="logout">
          <a href="view_admin.php"><i class="fa fa-user-circle" aria-hidden="true"> My Profile</i></a>
            <a href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
          </span>
       </div>
       <p>Add My Profile</p>
       <form action="?" method="post">
       <div class="content">
        <center>
            <br><br>
        <table>
            <tr>
                <td id="text">Full Name</td><td><input type="text" name="name" id="name" ></td>
            </tr>
            <tr>
                <td id="text">UserName</td><td><input type="text" name="uname" id="uname" ></td>
            </tr>
            <tr>
                <td id="text">Password</td><td><input type="password" name="psw" id="psw" ></td>
            </tr>
            <tr>
                <td id="text">Address</td><td><input type="text" name="addr" id="addr" ></td>
            </tr>
            <tr>
                <td id="text">City</td><td><input type="text" name="city" id="city" ></td>
            </tr>
            <tr>
                <td id="text">State/Provience/Region</td><td><input type="text" name="spr" id="spr" ></td>
            </tr>
            <tr>
                <td id="text">Postal COde/ZIP</td><td><input type="text" name="zip" id="zip" ></td>
            </tr>
            <tr>
               
                <td id="text">Position</td><td> <select name="pos">
                    <option>ADMIN</option>
                    <option>EMPLOYEEE</option>
                </select></td>
            </tr>
           
            <tr>
                <td id="text">Email</td><td><input type="email" name="mail" id="mail" ></td>
            </tr>
            <tr>
               
               <td id="text">Permission Level</td><td> <select name="p_level">
                   <option>FULL</option>
                   <option>PARTIAL</option>
               </select></td>
           </tr>
          </table><br>
         <input type="submit" id="upd" name="submit" value="SUBMIT"><br><br>
        </center>
        
       </div>

       </form>
       
    </body>
</html>
<?php

include 'dbConfig.php';

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $uname=$_POST['uname'];
  $psw=$_POST['psw'];
  $addr=$_POST['addr'];
  $city=$_POST['city'];
  $spr=$_POST['spr'];
  $zip=$_POST['zip'];
  $pos=$_POST['pos'];
  $mail=$_POST['mail'];
  $p_level=$_POST['p_level'];

$s="SELECT * from admin_profile where USERNAME='$uname'";
 $result=mysqli_query($conn, $s);
 $row=mysqli_num_rows($result);
 
     if($row==1)
   {
    $msg1="Admin PROFILE Already EXISTS!!!";
    $msg2="Try With Another Admin!!!";
    echo "<script type='text/javascript'>alert('$msg1 $msg2'); </script> ";
   
    }
    else{
       
        $sql="insert into admin_profile (FULLNAME,USERNAME,PASSWORD,ADDRESS,CITY,STATE_PROVIENCE_REGION,POSTALCODE_ZIP,POSITION,EMAIL,PERMISSION_LEVEL)
        values('$name','$uname','$psw','$addr','$city','$spr','$zip','$pos','$mail','$p_level')";
        $query=mysqli_query($conn,$sql);

        if($query)
        {
            $msg="Admin PROFILE ADDED SUCCESSFULLY!!!";
            echo "<script type='text/javascript'>alert('$msg'); </script> ";
        }
        else
        echo "Error:".$sql_query." ".mysqli_error($conn);
            
        }

}
      
?>