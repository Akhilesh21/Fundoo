<?php
$host = 'localhost';
$db = 'Sample';
$admin = 'root';
$password = 'Admin@1234';

try{
    $object = new PDO("mysql:host=$host;dbname=$db",$admin,$password);
      if(isset($_POST['email'])&&isset($_POST['password']) &&isset($_POST['number']) &&isset($_POST)){
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

    <title>Register Page</title>
</head>

<body>
    <div>
        <div class="register">Registeration Form</div>
        <div class="alignment">
            <div class="user">Name </div>
            <input type="text" id="name" name="name">
        </div>
        <br />
        <div class="alignment">
            <div class="user">Email Id</div>
            <input type="text" id="email" name="email">
        </div>
        
        <br />
        <div class="alignment">
            <div class="user">Number</div>
            <input type="text" id="number" name="number">
        </div>
        
        <br />
        <div class="alignment">
            <div class="user">Password</div>
            <input type="password" id="password" name="password">
        </div>
        <br />
        <div class="alignment">
            <div class="user">Confirm</div>
            <input type="password" id="password" name="password">
        </div>
        <br />
        <div class="buttons">
            <div class="sign">
                <input type="button" name="Sign Up" id="btn" onclick="btn" value="Sign Up" class="login" />
            </div>
           
            <div class="sign">
            <input type="submit" name="submit" value="SIGNUP" class="btn-login" />

            </div>


        </div>
    </div>

    <style>
        .user {
            width: 100 px;
        }

        .alignment {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20 px;
            font-weight: 800;
            padding: 20 px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login {
            background: #36718c;
            color: white;
            outline: none;
            width: 72px;
            height: 28px;
            border-radius: 9px;
            border: 1px solid;
        }

        .sign {
            width: 120px;
            display: flex;
            justify-content: center;
        }
    </style>
</body>

</html>