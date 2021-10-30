<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LAB 10(18CS30)</title>
</head>
<body>
<h1>TASK-1</h1>
<div>
<?php
$subject_name = 'Web Engineering(WE)';
$marks_we = 91;
$subject_name2 = 'Embedded Systems(EDS)';
$marks_eds = 42;
$subject_name3 = 'Communication Systems(CS)';
$marks_cs = 82;
echo "<table border=1px>
<th>Subjects</th>
<th> Marks </th>
<tr>
<td > $subject_name </td>
<td> $marks_we </td>
</tr>
<tr>
<td> $subject_name2 </td>
<td> $marks_eds </td>
</tr>
<tr>
<td > $subject_name3 </td>
<td> $marks_cs </td>
</tr>
</table>";
?>
</div>

