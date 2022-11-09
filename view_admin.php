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

    background-color:white;
    margin-left:5%;
    border-radius:10px;
    height:100%;
    width:90%;
    box-shadow:4px 4px 10px 8px gray;
    display: flex;
    flex-direction: column;
}
.profile{
    margin:2% 22% 0 22%;
    background-color:maroon;
    font-size: 24px;
    height:600px;
    width:auto;
    color:lightpink;
    border-radius: 10px;
    box-shadow: 4px 6px 8px 10px orangered;
    z-index: 1;
    display:none;
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
#text{
    text-align: right;
}
#val{
    color:white;
    text-align: left;
}
.input{
   text-align: center;
    background-color: yellow;
    height: auto;
    width: auto;
}
input{
    margin-top: 10px;;
    height:25px;
    width:220px;
    border-radius: 5px;;
}
        </style>

    </head>
    <body>
       <div class="top">
          <a  href="admindashboard.php">Admin Dashboard</a>
          <a  href="adminprofile.php">Add My Profile</a>
          <a  href="adminAddUser.php">Add User</a>
          <a  href="view_user.php">View User</a>
          <a href="admin_viewFile.php">View File</a>

          <div class="dropdown">
          <a class="drpbtn" href="">Update</a>
          <div class="dropdown_content">
          <a href="updateAdmin.php">ADMIN PROFILE</a>
                <a href="updateUser.php">USER PROFILE</a>
          </div>

          </div>

          <span class="logout">
          <a class="active" href="view_admin.php"><i class="fa fa-user-circle" aria-hidden="true"> My Profile</i></a>
            <a href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
          </span>
       </div>
       <p>My Profile</p>

       <div class="content">
       <form action="" method="post">
            <div class="input">
            <input type="text" name="uname" id="uname" placeholder="search by username" required><br><br>
        <input type="submit" name="submit" value="SHOW" style=" width:120px;background-color:green;color:white;">
        </div>
            </form>

        <div class="profile" id="hide_profile">
        <?php
$hostName="localhost";
$dbusername="root";
$dbpassword="";
$dbanme="file_management";
$conn=mysqli_connect($hostName, $dbusername, $dbpassword, $dbanme);
if(!$conn){
    echo "Database not connected";
}

if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
$sql = "SELECT * from admin_profile where USERNAME='$uname' ";
$query = mysqli_query($conn, $sql);
$row=mysqli_num_rows($query);

        if($row==1){
            while($result = mysqli_fetch_assoc($query)){
                $fname  = $result['FULLNAME'];
                $uname = $result['USERNAME'];
                $psw = $result['PASSWORD'];
                $addr = $result['ADDRESS'];
                $city = $result['CITY'];
                $spr = $result['STATE_PROVIENCE_REGION'];
                $zip = $result['POSTALCODE_ZIP'];
                $pos = $result['POSITION'];
                $mail = $result['EMAIL'];
                $p_level = $result['PERMISSION_LEVEL'];
     ?>
      <script >
               console.log("clicked!!");
               var x=document.getElementById("hide_profile");
              console.log(x.style.display);
              if(x.style.display=='none' || x.style.display==""){
                x.style.display="block";
              }
            </script>
     <table style="margin-top:80px;">
     <h2 style="color:blue;">***************WELCOME!!!**************</h2>
        <tbody >
            <tr>
              <td id="text">FULLNAME:</td><td id="val"><?php echo $fname; ?></td>
            </tr>

            <tr>
            <td id="text">USERNAME:</td><td id="val"><?php echo $uname ; ?></td>
            </tr>

            <tr>
            <td id="text">PASSWORD:</td><td id="val"><?php echo $psw; ?></td>
            </tr>

            <tr>
            <td id="text">ADDRESS:</td><td id="val"><?php echo $addr; ?></td>
            </tr>

            <tr>
            <td id="text">CITY:</td><td id="val"><?php echo $city; ?></td>
            </tr>
            
            <tr>
            <td id="text">STATE/PROVIENCE/REGION:</td><td id="val"><?php echo $spr; ?></td>
            </tr>

            <tr>
            <td id="text">POSTAL CODE/ZIP:</td><td id="val"><?php echo $zip; ?></td>
            </tr>

            <tr>
            <td id="text">POSITION:</td><td id="val"><?php echo $pos; ?></td>
            </tr>

            <tr>
            <td id="text">EMAIL:</td><td id="val"><?php echo $mail; ?></td>
            </tr>

            <tr>   
              <td id="text">PERMISSION/LEVEL:</td><td id="val"><?php echo $p_level; ?></td>
            </tr>   
     </table>
     <h2 style="color:teal;margin-top:20px;font-family:cursive;">***************Thank You!!!**************</h2>
     <?php
            }
        }
        else{
            
            $msg="USERNAME NOT FOUND!!!TRY WITH VALID USERNAME";
                echo "<script type='text/javascript'>alert('$msg'); </script> ";
         }        
    }
             ?>
        </div>
       
       </div>
       
    </body>
</html>
