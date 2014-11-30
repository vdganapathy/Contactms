<?php
class AreaController extends AppController
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
    $stmt = $conn->prepare("INSERT INTO areas (aname) VALUES (?)");
    $return=$stmt->execute(array($jsonasso["aname"]));
    echo json_encode(array("result" => $return));
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    }
}