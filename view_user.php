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
    margin-left:1%;
    border-radius:10px;
    height:100%;
    width:1500px;
    box-shadow:4px 4px 10px 8px gray;
    display: flex;
    flex-direction: column;
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
table{
    margin-top:40px;
  
}
table, th, td{
            border: 2px solid black;
            border-collapse: collapse;

        }
        td{
            color:black;
            text-align: center;
            height:40px;
            font-size:22px;
        }
        th{
            background-color:green;
        }
        tr:nth-child(odd){
            background-color: lightblue;
        }
        tr:nth-child(even){
            background-color:lavender ;
        }
        </style>

    </head>
    <body>
       <div class="top">
          <a  href="admindashboard.php">Admin Dashboard</a>
          <a  href="adminprofile.php">Add My Profile</a>
          <a  href="adminAddUser.php">Add User</a>
          <a class="active" href="view_user.php">View User</a>
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
       <p>View User Account</p>

       <div class="content">
       <?php
$hostName="localhost";
$dbusername="root";
$dbpassword="";
$dbanme="file_management";
$conn=mysqli_connect($hostName, $dbusername, $dbpassword, $dbanme);
if(!$conn){
    echo "Database not connected";
}

$sql = "SELECT * from employee_profile ";


function view($conn, $sql, $row){
    if($query = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($query) > 0){
            while($result = mysqli_fetch_array($query)){
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

                $row = $row."<tr>
                    <td>$fname</td>
                    <td>$uname</td>
                    <td>$psw</td>
                    <td>$addr</td>
                    <td>$city</td>
                    <td>$spr</td>
                    <td>$zip</td>
                    <td>$pos</td>
                    <td>$mail</td>
                    <td>$p_level</td>
                    </tr>";
            }
            mysqli_free_result($query);
        }
    }
    return $row;
}
$s = view($conn, $sql, "");
echo "<table>
   <tr>
   <th>FULLNAME</th>
   <th>USERNAME</th>
   <th>PASSWORD</th>
   <th>ADDRESS</th>
   <th>CITY</th>
   <th>STATE/PROVIENCE/REGION</td>
   <th>POSTAL CODE/ZIP</th>
   <th>POSITION</th>
   <th>EMAIL</th>
   <th>PERMISSION LEVEL</th>
</tr>".$s."
</table>";
             ?>
       </div>
       
    </body>
</html>
