<?php
class CityfilterController extends AppController
{
    public function index()
    {
        $city = trim($_POST['city']);
        $this -> autoRender = false;
        echo '<div class="row">
            <div class="col-md-4" style="border:0px;" >
            <input type="button" id="markactive" value ="Mark Active/InActive" '
        . 'class="btn btn-warning">
            </div>
            <div class="col-md-4" style="border:0px;" >
                <span>InActive : </span><div class="legendinactive"> </div>
            </div>
        </div>  ';
        
        
       
        
    $servername = "localhost";
    $username = "root";
    $password = "root";
    try
    {
    $conn = new PDO("mysql:host=$servername;dbname=contactdb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM contacts WHERE city = ?");
    $stmt->execute(array($city));
    $result = $stmt->fetchAll();
    echo '<table id="contactlist" class="table table-bordered" style="margin-top:5px;">'.
         '<tr>
          <th>#</th>
          <th>FIRST NAME</th>
          <th>LAST NAME</th>
          <th>MOBILE</th>
          <th>EMAIL ID</th>
          <th>ADDRESS</th>
          <th>AREA</th>
          <th>CITY</th>
          <th>STATE</th>
          <th>MOBILE 2</th>
          </tr>';
    
    foreach($result as $k => $v)
    {
        if($v["active"]==0)
        {
        echo '<tr class="danger">';
        }  else {
                echo '<tr>';     
        }
        echo '<td>'.'<input type="checkbox" value="'.$v["id"].'"></td>'.
            '<td>'.$v["firstname"].'</td>'.
             '<td>'.$v["lastname"].'</td>'.
             '<td>'.$v["mobile"].'</td>'.
             '<td>'.$v["email"].'</td>'.
             '<td>'.$v["address"].'</td>'.
             '<td>'.$v["area"].'</td>'.
             '<td>'.$v["city"].'</td>'.
             '<td>'.$v["state"].'</td>'.
             '<td>'.$v["mobile2"].'</td>';
        echo '</tr>';
    }
    echo '</table>';
    
    
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    }
}