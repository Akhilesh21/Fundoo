<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <h1><center> FUNDOO NOTES</center></h1>
    <h1><center>REGISTRATION PAGE</center></h1>
        

    <title>Registration Page</title>
 
</head>
<body>

        <form method="POST" action="registerdata">
         
         
      
         
        <div class="alignment">
                <div class="email">Name</div>
                <input type="text" name="name" id="name" required>
            </div>
            <br />

            <div class="alignment">
                <div class="email">Number</div>
                <input type="text" name="number" id="number" required>
            </div>
            <br />

            <div class="alignment">
                <div class="email">Email</div>
                <input type="text" name="email" id="email" required>
            </div>
            <br />

            <div class="alignment">
                <div class="email">Password</div>
                <input type="PASSWORD" name="password" id="password" required>
            </div>
            <br />
            <div class="buttons">
                <div class="btn">
                    <input type="submit" name="submit" value="REGISTER" class="btn-login" /><br>

                </div>

                </div>
                <center><span class="reg">Existing   User? <a href="login">login</a></span></center>

              
        </form>


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

        .card {
            box-shadow: 0 4px 8px 0 rgba(218, 13, 13, 0.2);
            transition: 0.3s;
            background: #f3f3ee;
            text-align: center;
            width: 600px;
            margin: 0 auto;
            height: 550px;
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