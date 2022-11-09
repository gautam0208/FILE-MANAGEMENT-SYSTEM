
       <?php
     include 'dbConfig.php';

      $targetDir="upload_file/";
      $fileName=basename($_FILES["fileToUpload"]["name"]);
      $targetFilePath=$targetDir.$fileName;
      $fileType=strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));
      $file_size = $_FILES['fileToUpload']['size'];
      $new_size = $file_size/1024;

      if(isset($_POST['submit']) && !empty($_FILES["fileToUpload"]["name"])){

            $uname=$_POST['uname'];
            $fname=$_POST['fname'];
            $ftypes=$_POST['types'];
            $rtypes=$_POST['record'];

          
           if(file_exists($targetFilePath)){
        ?>
  <script>
  alert('SOORY, File Alredy Exists!!!Try With Another File!!!');
        window.location.href='uploadFile.php';
        </script>
  <?php
           }

           else{

            if($_FILES["fileToUpload"]["size"]>5000000){
        ?>
                <script>
                alert('SORRY, Your File Is Too large.(<5MB)!!!');
                      window.location.href='uploadFile.php';
                      </script>
                <?php
             }
              
             else{

                $allowTypes=array('jpg','png','jpeg','gif','pdf','docx','pptx');
                //allow certain types only
                    if(in_array($fileType,$allowTypes)){
                         
                        //upload file to server
                        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$targetFilePath)){
          
                                       //insert file into database
                              $insert="insert into upload_file (USERNAME,FILE_NAME,RECORD_TYPE,FILE_TYPE,FILE,FILE_SIZE)
                                                  value ('$uname','$fname','$rtypes','$ftypes','$fileName','$new_size') ";
          
                                     $query=mysqli_query($conn,$insert);
                                     if($query){
                                        ?>
                                        <script>
                                        alert("The file has been uploaded successfully.");
                                              window.location.href='uploadFile.php';
                                              </script>
                                        <?php

                                     }
                                    
                        }
                         else{
                          ?>
                          <script>
                          alert('SORRY, There was an error uploading your file.!!!');
                                window.location.href='uploadFile.php';
                                </script>
                          <?php
                         } 
                    }
                    else{
                      ?>
                      <script>
                      alert('SORRY, only PDF, DOCX, PPTX, JPG, JPEG, PNG, GIF are allowed to upload!!!');
                            window.location.href='uploadFile.php';
                            </script>
                      <?php
                    }

             }


           }
           
         
      }
         
?>
