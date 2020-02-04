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
}
?>