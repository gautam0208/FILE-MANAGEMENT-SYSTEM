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
          <a  href="admindashboard.php">Admin Dashboard</a>
          <a  href="adminprofile.php">Add My Profile</a>
          <a  href="adminAddUser.php">Add User</a>
          <a href="view_user.php">View User</a>
          <a href="admin_viewFile.php">View File</a>

          <div class="dropdown">
          <a class="active" class="drpbtn" href="">Update</a>
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
       <p>Update Admin</p>

        <form action="?" method="post">
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



        $sql="update  admin_profile set $select='$val'  where USERNAME='$uname' ";
        $query=mysqli_query($conn,$sql);

        if($query)
        {
            $msg="ADMIN PROFILE UPDATED SUCCESSFULLY!!!";
            echo "<script type='text/javascript'>alert('$msg'); </script> ";
        }
        else
        echo "Error:".$sql_query." ".mysqli_error($conn);
            
 }   
?>