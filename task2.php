<h1>TASK-2(18CS30)</h1>
<?php
$nameErr = "";
$rollnoErr = "";
$ClassErr = "";
$sectionErr = "";
$name = "";
$rollno = "";
$class = "";
$section = "";
if($_SERVER["REQUEST_METHOD"]=="GET"){
if($_GET["name"] == ""){
    $nameErr = "Name must be filled";
    }
else{
    $name = data_return($_GET["name"]);
    }
if($_GET["rollno"]== ""){
    $rollnoErr = "Roll Number must be filled";
    }
else{
    $rollno = data_return($_GET["rollno"]);
    }
if($_GET["class"]==""){
    $ClassErr = "Class name is required";
    }
else{
    $class = data_return($_GET["class"]);
    }
if($_GET["section"]==""){
    $sectionErr = "Section is required";
    }
else{
    $section = data_return($_GET["section"]);
    }
}
function data_return($data){
return $data;
};
$_GET = array();
?>
<form method="get" id="myForm">
<fieldset>
<legend>Student Form</legend>
<label for="name">Name:</label>
<input type="text" name="name", id="Sname" value="<?php echo $name; ?>">
<span style="color:red"> <?php echo $nameErr; ?> </span>
<br>
<br>
<label for="rollno">Roll no:</label>
<input type="text" name="rollno" id="rollno" value="<?php echo $rollno; ?>">
<span style="color:red"><?php echo $rollnoErr; ?></span>
<br>
<br>
<label for="class">Class:</label>
<input type="text" name="class" id="class" value="<?php echo $class ?>">
<span style="color:red"><?php echo $ClassErr ?></span>
<br>
<br>
<label for="class">Section:</label>
<input type="text" name="section" id="section" value="<?php echo $section
?>">
<span style="color:red"><?php echo $sectionErr ?></span>
<br>
<br>
<input type="submit" value="Submit" name="submit">
</fieldset>
</form>
<?php
echo "<h3>YOUR OUTPUT:</h3>";
echo $name;
echo "<br>";
echo $rollno;
echo "<br>";
echo $class;
echo "<br>";
echo $section;
?>

