
<!Doctype html>
<html>
    <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      #select{
        float:right;
        color:white;
        background-color:green;
        outline:3px solid black;
      }
      #box_ceo,#box_dir,#box_man,#box_hr,#box_adm {
        display:none;
        float:right;
        margin-right:40px;
        height:30px;
        width:60px;
      }
    </style>
    </head>
    <body >
      
    </body>
</html>
<?php
   include 'emp_viewFile.php';

    if(isset($_GET['id'])){
        $u_id=$_GET['id'];
        ?>
         <div class="w3-white w3-card-4 w3-display-middle w3-round-large" style="height:600px;width:420px;">
       <div class= "w3-round-large w3-black " style="width:100%;height:50px;">

           <div class=" w3-xxlarge w3-text-amber w3-margin-right  w3-display-topleft">
           <a  href="homepage.php"><i class="fa fa-home" aria-hidden="true"> </i></a>
           </div>
  
            <div class="w3-container w3-margin-left w3-text-blue ">
           <h3 >FILE MANAGEMENT SYSTEM</h3>
             </div>
            </div>

            <div class="w3-container ">
        <h2 class="w3-text-indigo">Share<button onclick="checked()" id="select">Select</button></h2>
               <hr > 
               <input type="checkbox" id="box_ceo" >
                 <img src="ceo.png" alt="CEO" class="w3-card-4  w3-circle w3-left w3-margin-right" style="width:60px;">
                  <p class="w3-text-black w3-xlarge ">CEO 
                   <a href="share_post.php?post=CEO&user=<?php echo $_GET['id']; ?>"> <i class="w3-text-green w3-margin-left fa fa-share-square-o" aria-hidden="true"></i></a> 
                    </p>
               
                  <hr>      
                  <input type="checkbox" id="box_dir" >
                  <img src="director.png" alt="DIRECTOR" class="w3-card-4 w3-circle w3-left w3-margin-right" style="width:60px;">
                  <p class="w3-text-black w3-xlarge w3-margin-top">DIRECTOR
                  <a href="share_post.php?post=DIRECTOR&user=<?php echo $_GET['id']; ?>"> <i class="w3-text-green w3-margin-left fa fa-share-square-o" aria-hidden="true"></i></a>  
                  </p>
            
                  <hr>  
                  <input type="checkbox" id="box_man" >
                  <img src="manager.png" alt="MANAGER" class="w3-card-4 w3-circle w3-left w3-margin-right" style="width:60px;">
                  <p class="w3-text-black w3-xlarge w3-margin-top">MANAGER
                  <a href="share_post.php?post=MANAGER&user=<?php echo $_GET['id']; ?>"> <i class="w3-text-green w3-margin-left fa fa-share-square-o" aria-hidden="true"></i></a> 
                  </p>
               
                  <hr>    
                  <input type="checkbox" id="box_hr" >  
                  <img src="employee.png" alt="EMPLOYEE" class="w3-card-4 w3-circle w3-left w3-margin-right" style="width:60px;">
                  <p class="w3-text-black w3-xlarge w3-margin-top">HR
                  <a href="share_post.php?post=HR&user=<?php echo $_GET['id']; ?>"> <i class="w3-text-green w3-margin-left fa fa-share-square-o" aria-hidden="true"></i></a> 
                  </p>

                  <hr>
                  <input type="checkbox" id="box_adm" >
                  <img src="admin.png" alt="ADMIN" class="w3-card-4 w3-circle w3-left w3-margin-right" style="width:60px;">
                  <p class="w3-text-black w3-xlarge w3-margin-top">ADMIN
                  <a href="share_post.php?post=ADMIN&user=<?php echo $_GET['id']; ?>"> <i class="w3-text-green w3-margin-left fa fa-share-square-o" aria-hidden="true"></i></a> 
                  </p>
                  <hr>
                  <a href="emp_viewFile.php" class="w3-padding w3-margin-bottom w3-red w3-display-bottommiddle w3-text-white w3-large">Cancel</a>
               
        </div>

       </div>

<?php
    }
?>
<script>
  function checked(){
    console.log("clicked!!");
         var c=document.getElementById("box_ceo");
         var d=document.getElementById("box_dir");
         var m=document.getElementById("box_man");
         var h=document.getElementById("box_hr");
         var a=document.getElementById("box_adm");

         var y=document.getElementById("select");

         if(c.style.display=='none' || c.style.display=='')
         {
          c.style.display="block";
          d.style.display="block";
          m.style.display="block";
          h.style.display="block";
          a.style.display="block";

          y.style.backgroundColor="white";
          y.style.color="green";
         }
         else{
          c.style.display="none";
          d.style.display="none";
          m.style.display="none";
          h.style.display="none";
          a.style.display="none";

          y.style.backgroundColor="green";
          y.style.color="white";
         }
  }
</script>