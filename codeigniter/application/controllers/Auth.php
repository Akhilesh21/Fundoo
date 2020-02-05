<?php
class Auth extends CI_Controller
{
    public function login()
    {

        $this->load->view('login');
        //echo '  login page';
    }

    public function register()
    {
        $this->load->view('register');
    }
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
  