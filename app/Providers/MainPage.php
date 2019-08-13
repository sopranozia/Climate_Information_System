<!DOCTYPE html>



<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Register</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<div  class= "header">

<h1>Global Climate System</h1>


</div>








<body>
<h1></h1>



<form method = "post" action = "MainPage.php"  class = "contain">
<fieldset>
<legend>Climate Conditions</legend>
<label>Type In City And Country<input type = "text" name = "country_name" placeholder = "City,Country"/></label>

<input type = "button" value = "Search" class = "btnM"/></br>



<p>Highest:  <input type = "text" name = "High"     placeholder = "Highest Temperature" /></p>
<p>Average:  <input type = "text" name = "average"  placeholder = "Average Temperature"/></p>
<p>Lowest:   <input type = "text" name = "lowest"   placeholder = "Lowest Temperature"/></p>
<p>Humidity: <input type = "text" name = "humidity" placeholder = "Humidity"/></p>
<p>Pressure: <input type = "text" name = "pressure" placeholder = "Pressure"/></p>

</fieldset>
</form>



</body>
</html>