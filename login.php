<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{
        margin-left: 450px;
        padding: 20px;
        background-color: grey;
       }
       .register{
        margin-top: 20px;
        margin-left: 40px;
       }
       input{
            padding: 5px 10px;
            border-radius: 2px;
            
         }
         .login{
            margin-left: 130px;
            margin-top: 20px;
         }
    </style>
</head>
<body>
    <h1>Login</h1>
    <table>
    <tr>
    <td><label> Email </label></td>
    <td><input type="Email" name="mail" required="required" placeholder="Enter your email"></td>
    </tr>

   <tr>
    <td><label>Password</label></td>
    <td><input type="password" name="pass" required="required" placeholder="Enter your Password"></td>
   </tr>

   <tr>
   <td><input type="submit" value="Login" class="login">
   </tr> 
<tr>
    <td><p>
        Not yet Account? <a href="register.php">Register</a>
    </p></td>
</tr>
</table>


</body>
</html>