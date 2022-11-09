
<?php
    include 'emp_viewFile.php';

   
        if(isset($_GET['id'])){
            $u_id=$_GET['id'];
    
            // echo "<script>alert('$u_id');</script>";
          $select="select * from upload_file where USERNAME= '$u_id' ";
          $result=mysqli_query($conn,$select);
          $row=mysqli_fetch_assoc($result);
    
          $fileurl=$row['FILE'];
          $deletepath='upload_file/'.$fileurl;
    
          if(unlink($deletepath)){
    
    
             $sql="delete from upload_file where USERNAME='$u_id' ";
            $query=mysqli_query($conn,$sql);
            
            if($query){
                  $msg=$fileurl."  File Deleted Successfully!!!";
                  echo "<script>alert('$msg');</script>";
            }
            else{
                $msg=$fileurl."  File Not Deleted!!!";
                echo "<script>alert('$msg');</script>";
            }
    
          }
    
        }
    

    
    
?>
