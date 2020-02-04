<?php
$host = 'localhost';
$db = 'Sample';
$admin = 'root';
$password = 'Admin@1234';

try{
    $object = new PDO("mysql:host=$host;dbname=$db",$admin,$password);
      if(isset($_POST['name'])&&isset($_POST['email'])){
           $username = $_POST['name'];
           $password = $_POST['email'];
           $query = "SELECT * FROM table1 WHERE username='$username' AND id = '$password'";



           

      }

}
catch(PDOException $e){
    echo "not connected to db";
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
        <div class="alignment">
            <div class="email">Email Id</div>
            <input type="text" name="email" id="email">
        </div>
        <br />
        <div class="alignment">
            <div class="email">Password</div>
            <input type="password" name="password" id="password">
        </div>
        <br />
        <div class="buttons">
            <div class="btn">
                <input type="button" id="btn" onclick="btn" value="Login" class="register" />
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function() {

            $("#btn").attr('disabled', true);

            function validateNext() {
                var buttonNext = $("#email").val().trim() === '' || $("#password").val().trim() === '';
                $("#btn").attr('disabled', buttonNext);
            }
            $('#email').on('keyup', validateNext);
            $('#password').on('keyup', validateNext);


            $("#btn").click(function() {
                var formData = new FormData;
                formData.append("email", $("#email").val());
                formData.append("password", $("#password").val());

                $.ajax({
                    url: "api/login",
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,

                    success: function(Response) {
                        window.location.href = 'https://localhost:44345/List.html'
                        alert("Logged In!!");
                    },
                    error: function() {
                        alert("incorrect");
                    }
                });
            });
        });
    </script>
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