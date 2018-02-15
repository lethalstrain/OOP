<?php include "user.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Voeg toe</title>
</head>
<body>
<center>
<table border="1">
<form method="post" action="">
<tr>
	<th>Naam</th>
	<th>Email</th>
</tr>
<tr>
	<td><input type="text" name="naam"></td>
	<td><input type="text" name="email"></td>
</tr>	
</table>
<input type="submit" name="submit" value="maak aan!">
</form>
<br>
<br>
<?php
if (isset($_POST['submit'])) {
$persoon = new Persoon();
$persoon->defNaam($_POST['naam']);
$persoon->defEmail($_POST['email']);
$persoon->Toon();
}
?>



</center>
