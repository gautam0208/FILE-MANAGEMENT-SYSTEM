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
    width:60%;
    margin-left:20%;
    border-top:2px solid brown;
    color:brown;
    border-bottom:2px solid brown;
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
          <a class="active" href="admindashboard.php">Admin Dashboard</a>
          <a href="adminprofile.php">Add My Profile</a>
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
       <img src="admin_dashboard.png" alt="admin_dashboard" >

       <h1><i>WELCOME TO ADMINISTRATION</i>
    </body>
</html>
