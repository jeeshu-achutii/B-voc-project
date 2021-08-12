<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column5 {
  float: left;
  width: 50%;
  padding-left: 50px;
  height: 1000px; /* Should be removed. Only for demonstration */
}
.column6 {
  float: left;
  width: 50%;
  padding: 10px;
  height: 1000px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding-left: 250px;
  padding-right: 250px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=email],input[type=number]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,input[type=email]:focus,input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #FF8C00;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
   border-radius: 25px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ffffff;

}
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}
.column1 {
  float: left;
  width: 75%;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}


</style>
</head>
<body>



<div class="row">
  <div class="column5" style="background-color:#ffffff;">
    <div class="card">

  <form method="post" action="chat_q.php">
    <center><h3>chat</h3></center>
	
	<hr>
	<div class="row">
	  
<div class="column1" style="background-color:#ffffff;">
   <?php
  $db=mysqli_connect('localhost','root','','codephp');
  $query=mysqli_query($db,"SELECT *FROM chat");
?>

<?php
 while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo $row['sender'];?><br></td>
<td><?php echo $row['receiver'];?><br></td>
</tr>
<?php
}
?>
</div>
	<div class="column1" style="background-color:#ffffff;">
   <input type="text"  name="sender" >
</div>
<div class="column" style="background-color:#ffffff;">
    <button type="submit" name="save" class="registerbtn">Send</button>
	</div>
  </div>
  
  
  </div>

  </div>
  <div class="column6" style="background-color:#ffffff;">
    <div class="card">

  
    <center><h3>chat</h3></center>
	
	<hr>
	<div class="row">
	  
<div class="column1" style="background-color:#ffffff;">
   <?php
  $db=mysqli_connect('localhost','root','','codephp');
  $query=mysqli_query($db,"SELECT *FROM chat");
?>

<?php
 while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo $row['sender'];?><br></td>
<td><?php echo $row['receiver'];?><br></td>
</tr>
<?php
}
?>
</div>
	<div class="column1" style="background-color:#ffffff;">
   <input type="text"  name="receiver" >
</div>
<div class="column" style="background-color:#ffffff;">
    <button type="submit" name="save" class="registerbtn">Send</button>
	</div>
  </div>
  
  
  </div>
  </form>
	 </div>
  </div>
</div>

</body>
</html>
