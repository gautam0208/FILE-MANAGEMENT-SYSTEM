<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
#top{
  padding-top:20px;
    color:white;
   padding:15px 14px;
    text-decoration: none;
    font-size:18px;
    float:left;
}
#top:hover{
    background-color: white;
    color:#333;
}
#top.active{
    background-color:white;
    color:#333;
}
.logout {
    float:right;
    color:white;
    display:inline;
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

a{
    text-decoration: none;
}

        </style>

    </head>
    <body>
       <div class="top">
          <a id="top" href="admindashboard.php">Admin Dashboard</a>
          <a id="top" href="adminprofile.php">Add My Profile</a>
          <a id="top" href="adminAddUser.php">Add User</a>
          <a id="top" href="view_user.php">View User</a>
          <a id="top" class="active" href="admin_viewFile.php">View File</a>
          <div class="dropdown">
          <a id="top" class="drpbtn" href="">Update</a>
          <div class="dropdown_content">
                <a id="top" href="updateAdmin.php">ADMIN PROFILE</a>
                <a id="top" href="updateUser.php">USER PROFILE</a>
          </div>

          </div>
        

          <span class="logout">
          <a href="view_admin.php" id="top"><i class="fa fa-user-circle" aria-hidden="true"> My Profile</i></a>
            <a href="logout.php" id="top">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>   
          </span>
       </div>

       <div class="w3-white w3-card-4 w3-display-middle w3-round-large" style="height:550px;width:420px;">
       <div class= "w3-round-large w3-black " style="width:100%;height:50px;">

           <div class=" w3-xxlarge w3-text-amber w3-margin-right  w3-display-topleft">
           <a  href="homepage.php"><i class="fa fa-home" aria-hidden="true"> </i></a>
           </div>
  
            <div class="w3-container w3-margin-left w3-text-blue ">
           <h3 >FILE MANAGEMENT SYSTEM</h3>
             </div>
            </div>

            <div class="w3-container ">
        <h2 class="w3-text-indigo">Choose Your Post</h2>
               <hr > 
                   <a href="final_fileView.php?post=CEO"> <img src="ceo.png" alt="CEO" class="w3-card-4  w3-circle w3-left w3-margin-right" style="width:60px;">
                  <p class="w3-text-green w3-xlarge ">CEO <i class="w3-text-black w3-margin-left fa fa-eye" aria-hidden="true"></i></a> 
                    
               

                  <hr>

                  <a href="final_fileView.php?post=DIRECTOR"> <img src="director.png" alt="DIRECTOR" class="w3-card-4 w3-circle w3-left w3-margin-right" style="width:60px;">
                  <p class="w3-text-green w3-xlarge w3-margin-top">DIRECTOR<i class="w3-text-black w3-margin-left fa fa-eye" aria-hidden="true"></i></a>  
                  
              
                  <hr>   
                  <a href="final_fileView.php?post=MANAGER"> <img src="manager.png" alt="MANAGER" class="w3-card-4 w3-circle w3-left w3-margin-right" style="width:60px;">
                  <p class="w3-text-green w3-xlarge w3-margin-top">MANAGER<i class="w3-text-black w3-margin-left fa fa-eye" aria-hidden="true"></i></a> 
               
                  <hr>
                  <a href="final_fileView.php?post=HR"> <img src="employee.png" alt="EMPLOYEE" class="w3-card-4 w3-circle w3-left w3-margin-right" style="width:60px;">
                  <p class="w3-text-green w3-xlarge w3-margin-top">HR<i class="w3-text-black w3-margin-left fa fa-eye" aria-hidden="true"></i></a> 

                  <hr> 
                  <a href="final_fileView.php?post=ADMIN"><img src="admin.png" alt="ADMIN" class="w3-card-4 w3-circle w3-left w3-margin-right" style="width:60px;">
                  <p class="w3-text-green w3-xlarge w3-margin-top">ADMIN <i class="w3-text-black w3-margin-left fa fa-eye" aria-hidden="true"></i></a> 
                  
                  <hr>
                                 
        </div>

       </div>
 
       
    </body>
</html>
