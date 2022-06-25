<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PIZZA</title>
</head>
  <style>
     body{background-color:pink;}
   .table, th, td {
      padding: 25px;
      text-align:center;
      border:1px red solid;
      
}

table{
 border-collapse:collapse;
    }
table{
     margin-left:auto;
     margin-right:auto;
     
}

 .page-header, h2{
   text-align:center;
    
     
  }
 
</style>
<body>
   
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>PURCHASERS LIST.</h2>


                </div>
                 <table class="table">
                     <thead>
                         <tr>
                             <th scope="col" >#</th>
                             <th scope="col">FULL NAME</th>
                             <th scope="col">PHONE NUMBER</th>
 			     <th scope="col">ITEM</th>
			     <th scope="col">PRICE</th>
			      <th scope="col">HOSTEL/HALL</th>
			   
				 
                         </tr>
                     </thead>
                     <tbody>
                         <?php include 'retrieve-data.php'; ?>
                         <?php if($result->num_rows>0): ?>
                         <?php while($array=mysqli_fetch_row($result)): ?>

                         <tr>
                             <th scope="row">
                                 <?php echo $array[0]; ?>

                             </th>

                               <td><?php echo $array[1]; ?></td>
                               <td><?php echo $array[2]; ?></td>
                               <td><?php echo $array[3]; ?></td>
                               <td><?php echo $array[4]; ?></td>
                               <td><?php echo $array[5]; ?></td>
			         
                             




                         </tr>
                           <?php endwhile; ?>
                           <?php else: ?>

                           <tr>
                               <td colspan="3" rowspan="1" headers="">No Data Found </td>

                           </tr>
                           <?php endif; ?>
                           <?php mysqli_free_result($result); ?>
                     </tbody>
                 </table>
            </div>
        </div>

    </div>

       <?php echo date("y/m/d-- h:i:sa");  ?>

   
         
</body>
</html>