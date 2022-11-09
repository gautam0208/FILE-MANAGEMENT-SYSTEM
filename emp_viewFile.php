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

.file{
    height:100%;
    width: 90%;
    margin-left:5%;
    padding:20px 24px;
    text-align: center;
    box-shadow: 4px 4px 8px 6px gray;
}

td{
  height:60px;
    width:80px;
    font-size: 20px;
}
   th{
    background-color: blue;
    color:white;
    height:60px;
    width:120px;
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
        </style>

    </head>
    <body>
    <div class="top">
          <a id="top" href="employeedashboard.php">Employee Dashboard</a>
          <a id="top" href="uploadFile.php">Upload File</a>
          <a id="top" class="active" href="emp_viewFile.php">View File</a>
          <a id="top"  href="updUser.php">Update Details</a>

          <span class="logout">
          <a id="top" href="employeeprofile.php"><i class="fa fa-users" aria-hidden="true"> My Profile</i></a>
            <a id="top" href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
          </span>
       </div><br>
       
    
          <div id='file' class=" file">
          <div class="w3-yellow w3-text-teal w3-display-topmiddle w3-xlarge w3-margin-top" style="width:460px;margin-top:120px;">
       <h2 >List File Upload</h2>
       </div>
            <table >

            <tr>
            <th >UPLOADED BY</th>
                <th>FILE NAME</th>
                <th>RECORD TYPE</th>
                <th>FILE TYPE</th>
                <th>FILE URL</th>
                <th style="width:220px;">FILE SIZE(KB)</th>
                <th style="width:520px;">ACTION</th>
            </tr>

            <?php
             include 'dbConfig.php';
               
           $sql = "SELECT * from upload_file ";
           
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
            <a href="upload_file/<?php echo $row['FILE'] ?>" target="_blank"><button id="view">view <i class="fa fa-eye" aria-hidden="true"></i></button></a>
            <a download href="upload_file/<?php echo $row['FILE'] ?>"> <button id="download">Download <i class="fa fa-download" aria-hidden="true"></i></button> </a>
            <a href="delete.php?id=<?php echo $row['USERNAME'] ?>"> <button id="delete">Delete <i class="fa fa-trash" aria-hidden="true"></i></button> </a>
            <a href="share.php?id=<?php echo $row['USERNAME'] ?>"> <button id="share" >Share <i class="fa fa-share-square-o" aria-hidden="true"></i></button> </a>
              </td>
            
        </tr>
        <?php
 }


            ?>
            </table>
          </div>
    </body>
</html>