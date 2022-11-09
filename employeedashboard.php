
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
img{
  height:540px;
  width:100%;

}
h1{
    font-size:48px;
    width:75%;
    margin-left:15%;
    border-top:2px solid brown;
    color:brown;
    border-bottom:2px solid brown;
}

        </style>

    </head>
    <body>
       <div class="top">
          <a class="active" href="employeedashboard.php">Employee Dashboard</a>
          <a href="uploadFile.php">Upload File</a>
          <a href="emp_viewFile.php">View File</a>
          <a   href="updUser.php">Update Details</a>

          <span class="logout">
          <a href="employeeprofile.php"><i class="fa fa-users" aria-hidden="true"> My Profile</i></a>
            <a href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
          </span>
       </div>
       <img src="employee_dashboard.png" alt="employee_dashboard" >

       <h1><i>WELCOME TO EMPLYOYEE INTERFACE PAGE</i></h1>
    
    </body>
</html>
