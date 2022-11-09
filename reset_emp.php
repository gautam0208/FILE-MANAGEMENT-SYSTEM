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

    height:80px;
    background-color: #333;
}
h2{
    margin:0;
    text-align: center;
    padding-top:20px;
    font-size:48px;
   color:white;
}
a{
    margin-left: 20px;
    font-size:20px;
}
p{
    font-size:24px;
    border-bottom:2px solid gray;
    margin-left:10%;
    width:80%;
}

input{
    margin-top:10px;
    height:30px;
    width:400px;
    border-radius:5px;
}

#reset{
    text-align: center;
    font-size: 24px;
    background-color: lightblue;
}
#reset:hover{
    background-color: green;
    color:white;
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
        <h2>FILE MANAGEMENT SYSTEM</h2>
       </div>
       <p>Reset Employee Password</p>
      <form action="" method="post" >
      <div class="content">
                <center>
                    <br><br>
                <input type="text" name="uname" id="uname" placeholder="Enetr Username" required><br><br>
                <input type="password" name="psw1" id="psw1" placeholder="new password" required ><br><br>
                <input type="password" name="psw2" id="psw2" placeholder="confirm password" required ><br><br>
                 <input type="submit" id="reset" name="submit" value="Reset"><br><br>

                </center>
                <a href="employeelogin.php">Login</a><br><br>
               
        </div>
      </form>
       
    </body>
</html>
<?php
  include 'dbConfig.php';

  if(isset($_POST['submit'])){
     $uname=$_POST['uname'];
     $psw1=$_POST['psw1'];
     $psw2=$_POST['psw2'];

    $s="select * from employee_profile where Username='$uname' ";
    $data=mysqli_query($conn,$s);
    $row=mysqli_num_rows($data);

    if($row==1)
    {
        $sql="update employee_profile set PASSWORD='$psw1' where USERNAME='$uname' ";
        $query=mysqli_query($conn,$sql);

        if($query)
        {
            $msg1="PASSWORD UPDATED SUCCESSFULLY!!!";
        echo "<script type='text/javascript'>alert('$msg1'); </script> ";
        }
        else{
            echo "Error:".$sql_query." ".mysqli_error($conn);
        }
        
    }
    else{
        $msg1="USERNAME NOT FOUND!!!";
    
        echo "<script type='text/javascript'>alert('$msg1'); </script> ";
    }
    }
   
?>