<?php
class SidebarController extends AppController
{
    public function index()
    {
    $this -> autoRender = false;
    $servername = "localhost";
    $username = "root";
    $password = "root";
    echo '<h3>FILTER</h3>'
    . '<h4>Search</h4>'
            . '<input placeholder="firstname" type="text" id="searchterm"><br><br>'
            . '<input type="button" value="Search" id="searchbtn" class="btn btn-default">'
            . '<h4>City</h4>'
            . '<select style="width:150px;" id="filtercity" class="form-control">'
            . '<option>---SELECT---</option>';
    try
    {
    $conn = new PDO("mysql:host=$servername;dbname=contactdb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM cities");
    $return=$stmt->execute();
    $result = $stmt->fetchAll();
    foreach ($result as $k => $v)
    {
        echo '<option value="'.$v["cname"].'">'.$v[cname].'</option>'; 
    }
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    
    echo '</select>';
    }
}