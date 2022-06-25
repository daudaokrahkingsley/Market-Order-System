<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Enter Your Data</title>
  </head>
  <style>
     *{
        font-family: Arial, Helvetica, sans-serif;
     }

    body {
     background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
    }

    input {
      padding: 10px;
      margin-top: 10px;
      margin-left: 20px;
     
    }

    label {
      color: black;
      font-weight: bold;
      font-size: 20px;
    }

   .designForm{
     width: 500px;
     height: 480px;
     border: 1px solid red;
     background-color: white;
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);
     text-align: center;
     

   }
 button{
    background-color:red;
}
   

  </style>

  <script>
    function verifySpace() {
      var fn = document.getElementById("hall").value;
      if (fn == "") {
        document.getElementById("message").innerHTML = "No empty space";
        return false;
      } else {
        alert(" Submitted Successfully");
      }
    }
    

  </script>

  <body>
    <center>
      <h1 style="color: white;">FILL THIS FORM TO ORDER YOUR SHARWAMA</h1>
      
        <div class="designForm">
      <form action="insert.php" method="post" onsubmit=" return verifySpace()">
        <p>
          <label for="fname">Full Name:</label>
          <input
            type="text"
            name="fname"
            id="finame"
            style="margin-left: 62px"
            maxlength="10"
            autofocus
          />
          <span id="message" style="color: red"></span><br />
          <br />
        </p>


         <p>
          <label for="num1">Phone Number:</label>
          <input type="text" name="num1" id="Email"  maxlength="10" required />
        </p>




        
           
         <p>
            <label for="item">Item:</label>
            <input type="text" name="item" id="Email"  maxlength="10" required style="margin-left: 113px" value="SHARWAMA" readonly />
          </p>

          <p>
            <label for="price">Price:</label>
            <input type="text" name="price" id="Email"  maxlength="10" required  style="margin-left: 105px"/>
          </p>

         
              
        <p>
          <label for="hall">Hostel/Hall:</label>
          <input
            type="text"
            name="hall"
            id="hall1"
            style="margin-left: 53px"
            maxlength="10"
          />
          <span id="message" style="color: red"></span><br />
        </p>




        <input type="submit" value="Submit"  style="width: 200px; color:white; background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%); outline: none; "/>
        <input type="reset" value="RESET"  style="width: 200px; color:white; background-color:red;"/>
         <br>
         <br>
         <br>
              <a href="homepage.php" class="button button-alt"  style="width: 400px; height:400px; text-decoration: none; color:white; background-color:red;">BACK</a>
      </form>
    </center>
</div>
  </body>
</html>
