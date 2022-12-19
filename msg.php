
<?php $conn = mysqli_connect("localhost", "root", "", "hotel");
         
         // Check connection
         if($conn === false){
             die("ERROR: Could not connect. "
                 . mysqli_connect_error());
         }
          
         // Taking all 5 values from the form data(input)
         $fullname =  $_REQUEST['fullname'];
         $phoneno =  $_REQUEST['phoneno'];
         $subject = $_REQUEST['subject'];
         $message = $_REQUEST['message'];
         $cdate= date("Y/m/d");
         $approval= "approval" ;
          
         // Performing insert query execution
         // here our table name is contact
         $sql = "INSERT INTO contact VALUES ('','$fullname','$phoneno','$subject','$message','$cdate', '$approval')";
          
         if(mysqli_query($conn, $sql)){
             echo "<h3>data stored in a database successfully."
                 . " Please browse your localhost php my admin"
                 . " to view the updated data</h3>";
                 header("location:contact.php");
         
             // echo nl2br("'$fullname','$phoneno','$subject','$message','$cdate','$approval'");
         } else{
             echo "ERROR: Hush! Sorry $sql. "
                 . mysqli_error($conn);
         }
          
         // Close connection
         mysqli_close($conn);
         ?>
         