<?php
class DatasetupController extends AppController
{
    public function index()
    {
       $this-> autoRender = FALSE;
       $output = '<form class="form-horizontal" id="areafrm">
  <div class="form-group">
    <label for="inputArea" class="col-sm-2 control-label">AREA</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="aname" placeholder="Area">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button id="areabtn" type="button" class="btn btn-primary">ADD</button>
      <span id="result1"></span>
    </div>
  </div>
</form>
<br><br><br>
<form class="form-horizontal" id="cityfrm">
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">CITY</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cname" placeholder="City">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button id="citybtn" type="button" class="btn btn-primary">ADD</button>
      <span id="result2"></span>
    </div>
  </div>
</form>
<br><br><br>
<form class="form-horizontal" id="statefrm">
  <div class="form-group">
    <label for="inputstate" class="col-sm-2 control-label">STATE</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sname" placeholder="State">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button id="statebtn" type="button" class="btn btn-primary">ADD</button>
      <span id="result3"></span>
    </div>
  </div>
</form>

';
       echo ''.$output;
    }
}
