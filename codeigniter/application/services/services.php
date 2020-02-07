<?php
class services{
    
    public function registerdata()
    {
        $user = 'root';
        $db = 'Sample';
        $pwd = 'Admin@1234';
        $host = 'localhost';
        try {
            $dbObject = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
            if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['number']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $name = $_POST['name'];
                $number = $_POST['number'];
                $query = "INSERT INTO registration (name,number,email,password )VALUES ('$name','$number','$email','$password')";
                $stmt = $dbObject->prepare($query);
                if ($stmt->execute()) {
                    echo "Your data saved in database";
                } else {
                    echo "Plz enter proper details";
                }
                $dbObject = null;
            }
        } catch (PDOException $e) {
            echo "connection failure";
        }
    }

    public function logindata()
    {

        $host = 'localhost';
        $db = 'Sample';
        $admin = 'root';
        $password = 'Admin@1234';

        try {
            $object = new PDO("mysql:host=$host;dbname=$db", $admin, $password);
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $query = "SELECT * FROM registration WHERE email='$email' AND password = '$password'";
                $statement = $object->prepare($query);
                $statement->execute();
                if ($statement->rowCount() > 0) {
                    echo "Welcome";
                    $dbobject = null;
                } else {
                    echo "user doesn't exist";
                }

            }
        } catch (PDOException $e) {
            echo "connection failure";
        }

    }

}
?>