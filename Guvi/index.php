<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Register Page</title>   
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="App.js"></script>
    </head>
   <body>  
    <div class="main">
        <h1>
            Registration Form
        </h1>
        <div>
<?php
        if (isset($_POST['create']))
        $name =$_POST['name'];
        $mail =$_POST['mail']??'';
       $password =$_POST['password']??'';
        $sql= "INSERT INTO userdata (name,mail,password) VALUES(?,?,?)";
        $stmtinsert =$db->prepare($sql);
       $result =$stmtinsert->execute([$name,$mail,$password]);    
?></div>
  <form action="index.php" method="post">
    <div class="register">  
        <div class="row">
            <div class="col">  
        <label for="name"><span>First Name</span></label>
        <input class="form-control" type="text" name="name" placeholder="First Name" required>
        <br>               
        <label for="mail"><span>E-mail</span></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="form-control" type="mail" name="mail" placeholder="Ram@gmail.com" required>
        <br>
        <label for="password"><span>Password</span></label>&nbsp;&nbsp;
        <input class="form-control" type="password" name="password" placeholder="*********" required>
        <br>
        <input class="primary" type="submit" name="create" value="Sign Up" onclick="SignUp()"> 
        <p>Please click here to login  <a href="login.html">Sign in</a></p>
        </div>
        </div>
    </div>
    </form>
    </div>
   </body> 
</html>