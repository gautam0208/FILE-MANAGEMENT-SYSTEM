
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
    height:40px;
    width:500px;
    border-radius:5px;
}
#text{
    font-size: 18px;
    font-weight: 1000;
    color:royalblue;
    background-color: wheat;
}
#upload{
    text-align: center;
    font-size: 24px;
    background-color: lightblue;
}
#upload:hover{
    background-color: green;
    color:white;
}


  .content{
    width:40%;
    margin-top:4%;
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
          <a class="active" href="uploadFile.php">Upload File</a>
          <a href="emp_viewFile.php">View File</a>
          <a  href="updUser.php">Update Details</a>

          <span class="logout">
          <a href="employeeprofile.php"><i class="fa fa-users" aria-hidden="true"> My Profile</i></a>
            <a href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
          </span>
       </div>
       <p>Upload Files</p>
        
<form action="uf.php" method="post" enctype="multipart/form-data">
<div class="content">
                <center>
                    <br><br>
                    <input type="text" name="uname" id="uname" placeholder="Enetr Username" required><br><br>
                    <input type="text" name="fname" id="fname" placeholder="Enetr File Name" required><br><br>
                 <select name="types">
                    <option>Choose File Type</option>
                    <option value="pdf" >PDF</option>
                    <option value="docx" >DOCX</option>
                    <option value="pptx" >PPTX</option>
                    <option value="jpg" >JPG</option>
                    <option value="jpeg" >JPEG</option>
                    <option value="png" >PNG</option>
                    <option value="gif" >GIF</option>
                 </select><br><br>
                
               <input type="file" name="fileToUpload" id="fileToUpload"  required> <br><br>
                 <input type="text" name="record" id="record" placeholder="Enter Record Type" required><br><br>
                 <input type="submit" id="upload" name="submit" value="Upload"><br><br>

                 

                 <br><br>
                
                </center>   
        </div>
</form>
        
    </body>
</html>

