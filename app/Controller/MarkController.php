<?php
class MarkController extends AppController
{
    
    public function index()
    {
        $this -> autoRender = false;
         $jsonasso = json_decode($_POST["jsondata"], true);
         print_r($jsonasso);
         echo 'first='.$jsonasso[0];
    $servername = "localhost";
    $username = "root";
    $password = "root";
    try
    {
    $conn = new PDO("mysql:host=$servername;dbname=contactdb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    foreach ($jsonasso as $id)
    {
    $stmt = $conn->prepare("SELECT active from contacts where id= ?");
    $return=$stmt->execute(array($id));
    $result = $stmt->fetchAll();
    print_r($result);
    foreach ($result as $k => $v)
    {
    if($v["active"]==1)
    {
        $stmt = $conn->prepare("UPDATE contacts SET active=0 where id= ?");
    $return=$stmt->execute(array($id));
    } 
    else
    {
         $stmt = $conn->prepare("UPDATE contacts SET active=1 where id= ?");
    $return=$stmt->execute(array($id));
    }
    }
    
    }
    echo json_encode(array("result" => $return));
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    }
    
}