<?php
class CityController extends AppController
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
    $stmt = $conn->prepare("INSERT INTO cities (cname) VALUES (?)");
    $return=$stmt->execute(array($jsonasso["cname"]));
    echo json_encode(array("result" => $return));
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    }
}