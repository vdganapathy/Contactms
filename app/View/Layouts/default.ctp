<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Management System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this -> Html ->css('bootstrap.min.css'); ?>
    <?php echo $this -> Html ->css('bootstrap-theme.min.css'); ?>
    <?php echo $this -> Html ->css('style.css'); ?>
    
</head>
<body>
    <?php echo $this->Session->flash(); ?>
    <div class="transbox" >
        <div style="position: relative;margin: 50px auto; border-radius:5px;background: white; width: 400px; height: 400px; padding: 10px">
            <h3>Login</h3>
            <form id="loginfrm">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="uname" value="gana" placeholder="User Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="upass" value="12345" placeholder="Password">
  </div>
  
                <button id="loginbtn" type="button" class="btn btn-primary">Submit</button>
</form>
            
        </div>
        
        
    </div> 
    <div class="container" style="border: 1px solid rgba(0, 0, 0, 0.4); height: 100%;background: white;">
        <div class="row">
            <div class="col-md-5" >
                <h2>Contact Management System</h2>
            </div>
            <div class="col-md-7" >
                
                <div style="margin-top: 15px;" class="btn-group" role="group" aria-label="...">
  <button id="dashboard" type="button" class="btn btn-primary">DASHBOARD</button>
  <button id="newcontact" type="button" class="btn btn-primary">NEW CONTACT</button>
  <button id="allcontacts" type="button" class="btn btn-primary">ALL CONTACTS</button>
  <button id="datasetup" type="button" class="btn btn-primary">DATA SETUP</button>
  <a href="logout" class="btn btn-primary">LOGOUT</a>
                </div>
            </div>
        </div>  
    
 <div class="row show-grid">
     <div class="col-md-2" >
         <div id="sidebar" style="min-height: 500px;">
            
         </div>
        </div>
      <div class="col-md-10">
          <div id="maincontent" style="min-height: 500px;">
             
         </div>
      </div>
    </div>

    </div>
    <footer>
        
    </footer>    
 <!-- Scripts goes Here --> 
<?php echo $this -> Html ->script('jquery.min.js'); ?>
<?php echo $this -> Html ->script('bootstrap.min.js'); ?>
<?php echo $this -> Html ->script('script.js'); ?>

</body>
</html>
