<html>
<head>
<style>
table {
width: 50%;
border: 1px solid indigo;
margin-left:350px;
}
th,td {
text-align: left;
padding: 8px;
border: 1px solid indigo;
}
tr:nth-child(even) {
background-color: #f2f2f2;
}
th {
background-color: indigo;
color: white;
}
input,p {
text-align:right;
}
</style>
</head>
<body>
<form method="post" action="index.php">
<h1 style="text-align: center">Program 8</h1>
<h2 style="text-align: center">K Kaushik 4SF18CS054 </h2>
<hr>
<br>
<table>
<tr>
<th colspan="3" style="text-align:center;font-size:20px">Simple Calculator</th>
</tr>
<tr>
<td>First Number:</td><td><input type="text" name="num1" /></td>
<td rowspan="2"><button type="submit" name="submit" value="calculate">Calculate</td></tr>
<tr>
<td>Second Number:</td><td><input type="text" name="num2"/></td>
</tr>
</form>
<?php
if(isset($_POST['submit']))
{
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if(is_numeric($num1) and is_numeric($num2) )
{
echo "<tr><td> Addition :</td><td><p>".($num1+$num2)."</p></td>";
echo "<tr><td> Subtraction :</td><td><p> ".($num1-$num2)."</p></td>";
echo "<tr><td> Multiplication :</td><td><p>".($num1*$num2)."</p></td>";
echo "<tr><td>Division :</td><td><p> ".($num1/$num2)."</p></td>";
echo "</table>";
}
else
{
echo"<script> alert(' ENTER VALID NUMBER');</script>";
}
}
?>
</body>
</html>