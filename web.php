<!DOCTYPE html>
<html>
    <head>
        <title>database</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body{
            background-image:url("bg.jpg");
            background-repeat:none; 
        }
         .form-wrap{
            position:absolute;
            left:32%;
            top:20%; 
            width:550px;
            height:380px;
            box-sizing:border-box;
            background-color:mintcream;
            padding-left:20px;
            padding-top:30px;
         }
         .fname{
             margin-left:60px;
             width:300px;
             height:20px;
         }
         .lname{
             margin-left:62px;
             width:300px;
             height:20px;
         }
         .email{
             margin-left:93px;
             width:300px;
             height:20px;
         }
         .pw{
             margin-left:70px;
             width:300px;
             height:20px;
         }
         .cpw{
             margin-left:10px;
             width:300px;
             height:20px;
         }
         .sub{
             margin-left:200px;
             width:100px;
             height:30px;
         }
        </style>
    </head>
    <body>
        <div class=form-wrap>
        <form method="post" action="webdb.php">
          <label> First Name:</label> <input type="text" name="firstname" class="fname" required><br><br><br>
          <label> Last Name: </label><input type="text" name="lastname" class="lname" required><br><br><br>
		  <label> Email: </label> <input type="text" name="email"  class="email" required><br><br><br>
          <label> Password: </label> <input type="password" name="password" id="password"  class="pw" required><br><br><br>
		  <label>Confirm-password: </label> <input type="password" name="confirm-password" id="confirm-password" class="cpw" required><br><br><br>
          <input type="submit"  value="Submit" class="sub" onclick="return Validate()">
        </form>
        <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm-password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
      </script>
		</div> 
    </body>
</html>