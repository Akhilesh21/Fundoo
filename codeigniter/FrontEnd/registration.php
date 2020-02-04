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
                <input type="button" id="login" onclick="window.location.href='https://localhost:44345/Login.html'" value="Login" class="login" />
            </div>


        </div>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function() {

            $("#btn").attr('disabled', true);

            function validateNext() {
                var buttonNext = $("#email").val().trim() === '' || $("#password").val().trim() === '' || $("#name").val().trim() === '' || $("#address").val().trim() === '';
                $("#btn").attr('disabled', buttonNext);
            }
            $('#email').on('keyup', validateNext);
            $('#password').on('keyup', validateNext);
            $('#name').on('keyup', validateNext);
            $('#address').on('keyup', validateNext);

            $("#btn").click(function() {
                var formData = new FormData;
                formData.append("userId", $("#userId").val());
                formData.append("name", $("#name").val());
                formData.append("email", $("#email").val());
                formData.append("password", $("#password").val());
                formData.append("address", $("#address").val());

                $.ajax({
                    url: "api/add",
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,

                    success: function(response) {
                        window.location.href = 'https://localhost:44345/Login.html'
                        alert("Added!");
                    }
                });
            });
        });
    </script>
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