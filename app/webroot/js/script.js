$(document).ready(function()
{
 $( "#loginbtn" ).click(function()
 {
var jsondata=ConvertFormToJSON("loginfrm");
 $.ajax({
type: 'POST',    
url: "login",
data: {jsondata: jsondata},
success: function( data ) {
  var obj =  jQuery.parseJSON(data);
  if(obj.result===1)
  {
      $(".transbox").css("display","none");
      $.ajax({
url: "sidebar",
success: function( data ) {
$("#sidebar").html(data);
}
});
$.ajax({
url: "dashboard",
success: function( data ) {
$("#maincontent").html(data);
}
});

  }
}
});
});
 

$("#datasetup").click(function ()
{
 $.ajax({
url: "datasetup",
success: function( data ) {
$("#maincontent").html(data);
$("#maincontent .form-control").css("width","300px");
}
});
});

$("#newcontact").click(function ()
{
 $.ajax({
url: "newcontact",
success: function( data ) {
$("#maincontent").html(data);
$("#newcontactfrm .form-control").css("width","300px");
}
});
});

$("#allcontacts").click(function ()
{
 $.ajax({
url: "allcontacts",
success: function( data ) {
$("#maincontent").html(data);

}
});
});

$("#dashboard").click(function ()
{
 $.ajax({
url: "dashboard",
success: function( data ) {
$("#maincontent").html(data);
}
});
});


$("#maincontent").on('click','#areabtn', function ()
{
  var jsondata=ConvertFormToJSON("areafrm");
 $.ajax({
type: 'POST',    
url: "area",
data: {jsondata: jsondata},
success: function( data ) {
  var obj =  jQuery.parseJSON(data);
  if(obj.result===true)
  {
      $("#result1").html('ADDED').addClass(".bg-success");
  }
}
});
});

$("#maincontent").on('click','#citybtn', function ()
{
  var jsondata=ConvertFormToJSON("cityfrm");
 $.ajax({
type: 'POST',    
url: "city",
data: {jsondata: jsondata},
success: function( data ) {
  var obj =  jQuery.parseJSON(data);
  if(obj.result===true)
  {
      $("#result2").html('ADDED');
  }
}
});
});

$("#maincontent").on('click','#statebtn', function ()
{
  var jsondata=ConvertFormToJSON("statefrm");
 $.ajax({
type: 'POST',    
url: "state",
data: {jsondata: jsondata},
success: function( data ) {
  var obj =  jQuery.parseJSON(data);
  if(obj.result===true)
  {
      $("#result3").html('ADDED');
  }
}
});
});

$("#maincontent").on('click','#newcontactbtn', function ()
{
  var jsondata=ConvertFormToJSON("newcontactfrm");
 $.ajax({
type: 'POST',    
url: "contact",
data: {jsondata: jsondata},
success: function( data ) {
  var obj =  jQuery.parseJSON(data);
  if(obj.result===true)
  {
      $("#result4").html('ADDED');
  }
}
});
});


$("#sidebar").on('click','#searchbtn', function ()
{
 $.ajax({
type: 'POST',    
url: "searchterm",
data: {searchterm: $("#searchterm").val()},
success: function( data ) {
  $("#maincontent").html(data);
}
});
});


$("#sidebar").on('change','#filtercity', function ()
{
 $.ajax({
type: 'POST',    
url: "cityfilter",
data: {city: $("#filtercity").val()},
success: function( data ) {
  $("#maincontent").html(data);
}
});
});




$("#maincontent").on('click','#markactive', function ()
{
        var arr=[];
        $("#contactlist input:checked").each(function ()
        {
            arr.push($(this).val());
        });
        var jdata= JSON.stringify(arr);
    $.ajax({
type: 'POST',    
url: "mark",
data: {jsondata: jdata},
success: function( data ) {
 
}
});
});

});
function ConvertFormToJSON(form){
  var formjsondata="{";  
 $("#"+form).children("*").each(function()
 {
 if($(this).is("div"))
 {
     $(this).children("*").each(function (){
               
               if($(this).is("input"))
               {
                   formjsondata+='"'+$(this).attr("id")+'":"'+$(this).val()+'",';
               }
               if($(this).is("div"))
                {
                    $(this).children("*").each(function (){
                if($(this).is("input"))
               {
                   formjsondata+='"'+$(this).attr("id")+'":"'+$(this).val()+'",';
               } 
               if($(this).is("select"))
               {
                   formjsondata+='"'+$(this).attr("id")+'":"'+$(this).val()+'",';
               } 
               
               
                    });
                }
               
     });
 }
 });
 formjsondata=formjsondata.slice(0,formjsondata.length-1);
 return formjsondata+"}";
}

