<?php
class NewcontactController extends AppController
{
    public function index()
    {
        $this -> autoRender = false;
        
    $servername = "localhost";
    $username = "root";
    $password = "root";
    try
    {
    $areasoptions="";
    $conn = new PDO("mysql:host=$servername;dbname=contactdb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM areas");
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach($result as $k => $v)
    {
        $areasoptions []= '<option value="'.$v["aname"].'">'.$v["aname"].'</option>';
    }
    
    $stmt = $conn->prepare("SELECT * FROM cities");
    $stmt->execute();
    $result2 = $stmt->fetchAll();
    foreach($result2 as $k => $v)
    {
        $cityoptions []= '<option value="'.$v["cname"].'">'.$v["cname"].'</option>';
    }
    
    $stmt = $conn->prepare("SELECT * FROM states");
    $stmt->execute();
    $result3 = $stmt->fetchAll();
    foreach($result3 as $k => $v)
    {
        $stateoptions []= '<option value="'.$v["sname"].'">'.$v["sname"].'</option>';
    } 
    
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
        
        
        
        
        echo '<form class="form-horizontal" id="newcontactfrm">
<div class="form-group">
    <label for="inputfirstname" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="firstname" placeholder="firstname">
    </div>
  </div>  
<div class="form-group">
    <label for="inputlastname" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lastname" placeholder="lastname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputmobile" class="col-sm-2 control-label">Mobile</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mobile" placeholder="mobile">
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  id="address" placeholder="Address">
    </div>
  </div>
  <div class="form-group">
    <label for="inputArea" class="col-sm-2 control-label">Area</label>
    <div class="col-sm-10">
<select class="form-control" id="area">';
                foreach ($areasoptions as $option)
        {
                    echo ''.$option;
        }
echo '</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">City</label>
    <div class="col-sm-10">
<select class="form-control" id="city">';
                foreach ($cityoptions as $option)
        {
                    echo ''.$option;
        }
echo '</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputState" class="col-sm-2 control-label">State</label>
    <div class="col-sm-10">
<select class="form-control" id="state">';
                foreach ($stateoptions as $option)
        {
                    echo ''.$option;
        }
echo '</select>
    </div>
  </div>
 
 <div class="form-group">
    <label for="inputMobile2" class="col-sm-2 control-label">Mobile2</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mobile2" placeholder="mobile2">
    </div>
  </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="button" class="btn btn-primary" id="newcontactbtn">SAVE</button>
      <span id="result4"></span>
    </div>
  </div>
</form>';
    }
}

