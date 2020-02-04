<?php
$host = 'localhost';
$db = 'Sample';
$admin = 'root';
$password = 'Admin@1234';

try{
    $object = new PDO("mysql:host=$host;dbname=$db",$admin,$password);
      if(isset($_POST['email'])&&isset($_POST['password'])){
           $email = $_POST['email'];
           $id = $_POST['password'];
           $query = "SELECT * FROM table1 WHERE email='$email' AND ID = '$id'";
           $statement = $object->prepare($query);
           $statement->execute();
           if($statement->rowCount()>0){
             echo $email;
             $dbobject = null;
           }else
           echo "user doesn't exist";
       }
            }
catch(PDOException $e){
    echo "connection failure";
}
?>




<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
   
</head>

<body>
    <div>
        <div class="login">Login</div>
        <form method="POST" action="#">
        <div class="alignment">
            <div class="email">Email Id</div>
            <input type="text" name="email" id="email">
        </div>
        <br />
        <div class="alignment">
            <div class="email">Password</div>
            <input type="text" name="password" id="password">
        </div>
        <br />
        <div class="buttons">
            <div class="btn">
              <input type="submit" name="submit" value="LOGIN" class="btn-login" />
            </div>
        </div>
    </div>

    <style>
        .login {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            font-weight: 800;
            padding: 20px;
        }

        .alignment {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .email {
            width: 100px;
        }

        .register {
            background: #36718c;
            color: white;
            outline: none;
            width: 72px;
            height: 28px;
            border-radius: 9px;
            border: 1px solid #aaa;
        }

        .buttons {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn {
            width: 120px;
            display: flex;
            justify-content: center;
        }
    </style>
</body>

</html>