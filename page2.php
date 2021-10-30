<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 10(18CS30)</title>
</head>
<body>
<div>
<h2> YOUR DATA:</h2>
<p><label for="name">Name: </label> <?php echo $_POST["sname"]?></P>
<p><label for="Father-name">Father Name: </label> <?php echo $_POST["fname"]?></p>
<p><label for="Cnic">Cnic Number: </label><?php echo $_POST["nic"]?></p>
<p><label for="Email">Email Address: </label><?php echo $_POST["mail"]?></p>
<p><label for="Phone">Contact number: </label><?php echo $_POST["phoneNo"]?></p>
</div>
<div>
<a href="labTen.php"><button type="submit" name="modify">Modify</button></a>
<form action="result.php" method="GET">
<button type="submit" name="submit">Submit</button>
</form>
</div>
</body>
</html>

