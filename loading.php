<script>
function getHTTPObject()
	{
  		var xmlhttp;
  		
  		if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
  		{
    		try {	xmlhttp = new XMLHttpRequest();	} catch (e) {   xmlhttp = false;   }
  		}
  		return xmlhttp;
	}
var http = getHTTPObject(); // We create the HTTP Object
function handleHttpResponse()
{
	if(http.readyState == 4)
	 {
	 var temp = new Array();
	 temp = (http.responseText);
	 alert(temp);
	 window.location.reload();
	 
	 }
	
}
function test()
{
	var con=confirm("Are you sure you want to see the file.");
	if(con==true)
	{
		document.getElementById('loadingdiv').style.display="block";
        document.getElementById('fadediv').style.display="block";
		
		var url="test.php";
		http.open('GET',url,true);
		http.onreadystatechange = handleHttpResponse;
		http.send(null);
	}

}

</script>
<style type="text/css">

#fadediv {
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
  position: fixed;
  display: block;
  opacity: 0.7;
  background-color: #969696;
  z-index: 99;
}

#loadingdiv {
  
  padding-left:19px; 
  position: fixed; 
  top: 220px;
  left: 460px;
  height:80px;
  width:370px; 
  z-index: 120;
  background-color:#333333; 
  color:#FFFF00; 
  display:block;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="loading.php">
 <div id="fadediv" style="display:none;"></div>

<div id="loadingdiv" style="display:none;">
			  <img align="absmiddle" style="padding-top:16px;" src="ajax_loader.gif" alt="Loading..." />  &nbsp; &nbsp;
			  <span id="textspan">Processing, Please Wait....</span>
	  </div>
	  
	  
	  
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="button" onclick="test()" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

