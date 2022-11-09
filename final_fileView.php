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

.file{
    height:640px;
    width: 90%;
    margin-top:2%;
    margin-left:5%;
    padding:20px 24px;
    text-align: center;
    box-shadow: 4px 4px 8px 6px gray;
   
  
}
h1{
  font-size:48px;
  color:red;
  text-shadow:2px 2px pink;
  text-decoration:underline overline;
}
h2{
    background-color: yellow;
    text-align: center;
    height:40px;
    width:420px;
    margin-left:35%;
}

td{
  height:60px;
    width:120px;
    font-size: 20px;
}
   th{
    background-color: blue;
    color:white;
    height:60px;
    width:140px;
    font-size:18px;
   }
   tr:nth-child(odd){
    background-color: lightgray;
   }
   tr:nth-child(even){
    background-color: lightblue;
   }
a{
    text-decoration: none;
}
button{
  border:none;
  height:50px;
  border-radius: 5px;
}
#view{

  background-color: teal;
}
#download{
  background-color: blue;
}
#delete{
  background-color: red;
}
#share{
  background-color: green;
}
button i{
  color:pink;
}
#view:hover, #download:hover, #delete:hover, #share:hover{
  background-color: white;
}
#refresh{
    height:80px;
    width:120px;
    padding:6px 10px;
    background-color: orangered;
    color:white;
    border-radius: 5px;
    margin-left:800px;
}
#back{
  height:40px;
    width:120px;
    padding:6px 10px;
    background-color:teal;
    color:white;
 border-radius: 5px;
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
 
       <div class=" file">
        <h1>WELCOME <?php echo $_GET['post']; ?></h1>
         <h2>LIST FILE SHARED</h2>
        
            <table >
            <tr>
            <th >SHARED BY</th>
                <th>FILE NAME</th>
                <th>RECORD TYPE</th>
                <th>FILE TYPE</th>
                <th>FILE URL</th>
                <th style="width:220px;">FILE SIZE(KB)</th>
                <th style="width:420px;">ACTION</th>
            </tr>

            <?php
             include 'dbConfig.php';
               if(isset($_GET['post'])){
                $post=$_GET['post'];
                ?>
                <a id="refresh" href="final_fileView.php?post=<?php echo $post; ?>">Refresh <i class="fa fa-refresh" aria-hidden="true"></i></a>
                <?php
                $sql = "SELECT * from share where POST='$post' ";
           
                $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result))
      {
       ?>
             <tr>
             <td><?php echo $row['USERNAME'] ?></td>
             <td><?php echo $row['FILE_NAME'] ?></td>
             <td><?php echo $row['RECORD_TYPE'] ?></td>
             <td><?php echo $row['FILE_TYPE'] ?></td>
             <td><?php echo $row['FILE'] ?></td>
             <td><?php echo $row['FILE_SIZE'] ?></td>
             <td >
             <a href="<?php echo $post; ?>_file/<?php echo $row['FILE'] ?>" target="_blank"><button id="view">view <i class="fa fa-eye" aria-hidden="true"></i></button></a>
                 <a download href="<?php echo $post; ?>_file/<?php echo $row['FILE'] ?>"> <button id="download">Download <i class="fa fa-download" aria-hidden="true"></i></button> </a>
                 <a href="delete_adminFile.php?post=<?php echo $post; ?>&id=<?php echo $row['USERNAME'] ?>"> <button id="delete">Delete <i class="fa fa-trash" aria-hidden="true"></i></button> </a>
            
                </td>
               
             </tr>
             <?php
      }


               }
          
            

            ?>
             <a id="back" href="admin_viewFile.php">Back <i class="fa fa-hand-o-up" aria-hidden="true"></i></a>
            </table>
           
          
          </div>
    </body>
</html>


       