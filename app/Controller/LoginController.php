<?php

class LoginController extends AppController
{
   
    public function index()
    {
    $this -> autoRender = false;
    $jsonasso = json_decode($_POST["jsondata"], true);
    $servername = "localhost";
    $username = "root";
    $password = "root";
    try
    {
    $conn = new PDO("mysql:host=$servername;dbname=contactdb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM login WHERE uname = ? AND upass = ?");
    $stmt->execute(array($jsonasso["uname"],$jsonasso["upass"]));
    echo json_encode(array("result" => $stmt->rowCount()));
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    }
}