 <html>
<head>
<link type="text/css" rel="stylesheet" a href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">

body {
	background-color: #fce6f4;
}
.style1 {"Trebuchet MS", Helvetica, sans-serif}
.style2 {
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	font-weight: bold;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin: 25px 0;
    font-size: 15px;
    font-family: "Trebuchet MS", Helvetica, sans-serif;
    min-width: 200px;
	table-align: center;
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	text-align: center;
	padding: 12px 15px;
	margin-left: auto;
	margin-right: auto;
}


</style>
</head>
<body>
<!--<h> 
  <div align="center" class="style2">
    <h1>Membership form </h1>
  </div>
</h>
<p align="center" class="style1"> Please fill out the following form </p>
<form name="form" action="" method="post">
<table border="1" align="center">
<tr class="active-row">
<td> Name </td>
<td> <input type="text" name="name1"> 
</td>
</tr>
<tr>
<td> Membership Type </td>
<td> Regular <input type="radio" name="membership" value="Regular">  Premium <input type="radio" name="membership" value="Premium">
</td>
</tr>
<tr>
<td> Payment Schedule </td>
<td> <select name="Select">
<option> Monthly </option>
<option> Annual </option>
<option> 3-year subscription </option>
</select>
</td>
</tr>
<tr>
<td> Credit Card Number </td>
<td> <input type="number" name="cardno"> 
</td>
</tr>
<tr>
<td> </td>
<td> <input type="button" name="submit" value="submit">
</td>
</tr>
</table>-->

<?php

echo '<h>';
echo '<div align="center" class="style2">';
echo '<h1>Membership form </h1>';
echo '</div>';
echo '</h>';
echo '<p align="center" class="style1"> Please fill out the following form </p>';
echo '<form name="form" action="" method="post">';
echo '<table border="1" align="center">';
echo '<tr>';
echo '<td> Name </td>';
echo '<td> <input type="text" name="name1">';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td> Membership Type </td>';
echo '<td> Regular <input type="radio" name="membership" value="Regular">  Premium <input type="radio" name="membership" value="Premium">';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td> Payment Schedule </td>';
echo '<td> <select name="Select">';
echo '<option> Monthly </option>';
echo '<option> Annual </option>';
echo '<option> 3-year subscription </option>';
echo '</select>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td> Credit Card Number </td>';
echo '<td> <input type="number" name="cardno">';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td> </td>';
echo '<td> <input type="submit" name="submit" value="submit">';
echo '</td>';
echo '</tr>';
echo '</table>';
 



//Establishing Connection with Server
$connection = mysqli_connect("localhost", "root", "");

//Selecting Database from Server
$db = mysqli_select_db( $connection, "form");

// To check whether connection has established
if ($connection) {
print "Database Found";}
else {
print "Database NOT Found";}
	
//Fetching variables of the form which travels in URL
if(isset($_POST['submit']))
{
$CustomerName = $_POST['name1'];
$MembershipType = $_POST['membership'];
$PaymentType = $_POST['Select'];
$CreditcardNo = $_POST['cardno'];

if($CustomerName !=''||$CreditcardNo !=''){ //condition that the form is'nt left empty 
$query=mysqli_query($connection,"INSERT INTO form(CustomerName, MembershipType, PaymentType, CreditcardNo) VALUES ('$CustomerName','$MembershipType', '$PaymentType', '$CreditcardNo')");
	echo "<br/><br/><span>Data Recorded successfully...!!</span>"; //confirmation to the customer
    }
    else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";   
    }
	}

	//Closing Connection with Server
	mysqli_close($connection);

?>

</form>
</body>
</html>