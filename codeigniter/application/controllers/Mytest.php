<?php

/*
 */
class Mytest
{
    private $connect = '';
    public function __construct()
    {
        $this->database_connection();
    }
    public function database_connection()
    {
        $this->connect = new PDO("mysql:host=localhost;dbname=Sample", "root", "Admin@1234");
    }
    public function fetch_all()
    {
        $query = "SELECT * FROM table1 ORDER BY id";
        $statement = $this->connect->prepare($query);
        if ($statement->execute()) {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            echo json_encode($data);
            return $data;
        }
    }                                                                                                            
    public function insert()
    {
        if (isset($_POST["name"])) {
            $form_data = array(
                ':name' => $_POST["name"],
                ':email' => $_POST["email"],
            );
            $query = "INSERT INTO table1(name, email) VALUES(:name, :email)";
            $statement = $this->connect->prepare($query);
            if ($statement->execute($form_data)) {
                $data[] = array(
                    'success' => 'inserted',
                );
            } else {
                $data[] = array(
                    'fail' => 'not inserted',
                );
            }
        } else {
            $data[] = array(
                'fail' => 'set the name',
            );
        }
        echo json_encode($data);
        return $data;
    }

    