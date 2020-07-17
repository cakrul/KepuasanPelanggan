<?php
define("BASEPATH", dirname(__FILE__));
require('../connection/conn.php');
require('session.php');
if (isset($_POST['btnlogin'])) {


  $user = trim($_POST['username']);
  $upass = trim($_POST['password']);
  $h_upass = sha1($upass);
if ($upass == ''){
     ?>    <script type="text/javascript">
                alert("Password is missing!");
                window.location = "login.php";
                </script>
        <?php
}else{
//create some sql statement             
        $sql = "SELECT * FROM  `user` WHERE  `username` =  '" . $user . "' AND  `password` =  '" . $upass . "'";
        $result = mysqli_query($conn, $sql);

        if ($result){
             //get the number of results based n the sql statement
        $numrows = mysqli_num_rows($result);
     
        //check the number of result, if equal to one   
        //IF theres a result
            if ($numrows == 1) {
                //store the result to a array and passed to variable found_user
                $found_user  = mysqli_fetch_array($result);

                //fill the result to session variable
                $_SESSION['MEMBER_ID']  = $found_user['id']; 
                $_SESSION['MEMBER_NAMA']  = $found_user['nama']; 
           
             ?>    <script type="text/javascript">
                      //then it will be redirected to index.php
                      // window.location = "index.php";
                      window.location = "index.php";
                  </script>
             <?php        
           
        
            } else {
            //IF theres no result
              ?>    <script type="text/javascript">
                alert("Username or Password Not Registered! Contact Your administrator.");
                window.location = "index.php";
                </script>
        <?php

            }

         } else {
                 # code...
         die("Table Query failed: " );
        }
        
    }       
} 
 
?>