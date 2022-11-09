<?php
 
    include "share.php" ;
            
    if(isset($_GET['post']) & isset($_GET['user'])){
        $post=$_GET['post'];
        $user=$_GET['user'];
       // echo "<script>alert('$post $user');</script> ";

        $select="select * from upload_file where USERNAME= '$user' ";
        $result=mysqli_query($conn,$select);
        $row=mysqli_fetch_assoc($result);

        $fname=$row['FILE_NAME'];
        $rtypes=$row['RECORD_TYPE'];
        $ftypes=$row['FILE_TYPE'];
        $file=$row['FILE'];
        $fsize=$row['FILE_SIZE'];

        

        $s="select * from share where POST='$post' and FILE='$file' ";
        $data=mysqli_query($conn,$s);
        $r=mysqli_num_rows($data);

        if($r==1){
         $msg=$file." already exists for ".$post;
         echo "<script>alert('$msg'); </script>" ;
        }
        else{

                     $src="upload_file/";
                                       $source=$src.$file;
                                     $des=$post."_file/";
                                     $destination=$des.$file;
                                     $file_size = $fsize;
                                     $new_size = $file_size/1024;
                               
                                     if(!empty($file)){
                                         
                                          if(file_exists($destination)){
                                       ?>
                                 <script>
                                 alert('SOORY, File Alredy Exists!!!Try To Share Another File!!!');
                                       window.location.href='share.php';
                                       </script>
                                 <?php
                                          }
                               
                                          else{
                                                       //copy your file to destination
                                                     if(copy($source,$destination)){
                                                                      //insert file into database
                                                             $insert="insert into share (POST,USERNAME,FILE_NAME,RECORD_TYPE,FILE_TYPE,FILE,FILE_SIZE)
                                                                                 value ('$post','$user','$fname','$rtypes','$ftypes','$file','$new_size') ";
                                         
                                                                    $query=mysqli_query($conn,$insert);
                                                                    if($query){
                                                                     ?>
                                                                     <script>
                                                                     alert("The file has been shared successfully to <?php echo $post; ?> !!!");
                                                                           window.location.href='share.php';
                                                                           </script>
                                                                     <?php
                                                                    }
                                                                    else{
                                                                     ?>
                                                                     <script>
                                                                     alert('SORRY, There was an error sharing your file to <?php echo $post; ?>.!!!');
                                                                           window.location.href='share.php';
                                                                           </script>
                                                                     <?php
                                                                    } 
                                                               }
                                                        else{
                                                         ?>
                                                         <script>
                                                         alert('SORRY, There was an error copy your file to <?php echo $post; ?> directory.!!!');
                                                               window.location.href='share.php';
                                                               </script>
                                                         <?php
                                                        } 
                                                   }
                                            }
                                          }
                  
                   }

                

    
?>