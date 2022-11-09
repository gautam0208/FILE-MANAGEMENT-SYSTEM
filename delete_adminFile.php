
<?php
    include 'final_fileView.php';

   
        if(isset($_GET['post'])& isset($_GET['id'])){
            $u_id=$_GET['id'];
           $post=$_GET['post'];

            // echo "<script>alert('$u_id');</script>";
          $select="select * from share where USERNAME= '$u_id' && POST='$post' ";
          $result=mysqli_query($conn,$select);
          $row=mysqli_fetch_assoc($result);
    
          $fileurl=$row['FILE'];
          $deletepath=$post.'_file/'.$fileurl;
    
          if(unlink($deletepath)){
    
    
             $sql="delete from share where USERNAME='$u_id' && POST='$post'";
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
