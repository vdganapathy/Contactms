<?php
class ContactController extends AppController
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
    $stmt = $conn->prepare("INSERT INTO contacts ( firstname,lastname,mobile,email,address,
area,city,state,mobile2 ) VALUES (?,?,?,?,?,?,?,?,?)");
    $return=$stmt->execute(array($jsonasso["firstname"],$jsonasso["lastname"],
        $jsonasso["mobile"],$jsonasso["email"],$jsonasso["address"],
        $jsonasso["area"],$jsonasso["city"],$jsonasso["state"],$jsonasso["mobile2"]
        ));
    echo json_encode(array("result" => $return));
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    }
}