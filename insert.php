<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Insert Page page</title>
</head>
<body>
     <center>
         <?php

         $conn = mysqli_connect("localhost", "root", "", "my_db");
          
         if($conn === false){
             die("ERROR: Could not connect."
             .mysqli_connect_error());

         }
	 $custId = $_REQUEST['custId'];
         $fname =  $_REQUEST['fname'];
         $num1  =  $_REQUEST['num1'];
         $item  =  $_REQUEST['item'];
         $price =  $_REQUEST['price'];   
         $hall  =  $_REQUEST['hall'];

         $sql = "INSERT INTO customers VALUES ('$custId','$fname', '$num1', '$item', '$price', '$hall')";

         if(mysqli_query($conn, $sql)){
             echo "<h1> Your Request is Sent Successfully.<br>We'll get back to You Soon <br>Thank You... </h1>";
             echo n12br("\n $custId\n $fname\n"
             . " $num1\n $item\n $price\n $hall");

         }else{
             echo "ERROR:   Sorry $sql."
             . mysqli_error($conn);

         }
           mysqli_close($conn);

       
         ?>
     </center>
    
</body>
</html>