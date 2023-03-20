<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          body{
            margin-left:400px;
            background-color: grey;
            padding: 5px;
         }
         input{
            padding: 5px 10px;
            border-radius: 2px;
         }
         .row{
            padding: 5px;
         }
         .submit
           {
            margin-left: 120px;
            margin-top: 30px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            border-radius: 5px;
         }
         h1{
            margin-left: 100px;
            font-family: 'Times New Roman', Times, serif;
         }

         .label{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         }
         .para{
            margin-left: 70px;
         }
    </style>
</head>
<body>
    
    <h1>Registration</h1>
    <table>
   
   
    <tr >
        <td><label class="label"> UserName </label></td>
    <td><input type="Text" name="username" required="required" placeholder="username"></td></tr>

   <tr >
    
    <td><label class="label"> FirstName </label></td>
    <td><input type="text" name="Firstname" required="required" placeholder="Enter your name"></td>

</tr>
  <tr >
   
    <td><label class="label"> Email </label></td>
    <td><input type="Email" name="email" required="required" placeholder="Enter your email"></td>
</tr>
  
    <tr>
    <td><label class="label">Password</label></td>
    <td><input type="password" name="pass" required="required" placeholder="Enter your Password"></td>
</tr>
 
<tr >

    <td><label class="label">Confirm Password</label></td>
    <td><input type="text" name="con" required="required" placeholder="Confirm your password"></td>
 
</tr>  
<tr >

    <td><input type="submit" name="register" value = "Register" class="submit"></td>
 
</tr>

</table>
<p class="para">Already Registered? <a href="login.php">Login</a></p>

</body>
</html>