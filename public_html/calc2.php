<!DOCTYPE html>
<html>
<head>
	<style>
table, th, td {
    border: 1px solid black;
}
</style>
<?php
$age= $_POST["age"];
$initial= $_POST["initial"];
$fbalance =$initial;
$montly= $_POST["montly"];
$rate= $_POST["rate"];
$interst=0;
$finterest=0;

?>

</head>
<body>
<h1>Your interest <h1>

<?php
 echo "<h3>Initial Invesment: " . $initial . "</h3>";
 echo "<h3>Interest Rate: " . $rate . "</h3>";
 echo "<h3>Montly Deposit: " . $montly . "</h3>";
 echo "<h3>Invesment started at age: " . $age . "</h3>";
 ?>
<table><tr>
<th>Age</th><th>Beg Bal</th><th>Interest</th><th>Deposits</th><th>Ending Bal<th/>
</tr>
<?php 
while($age<=65){
	echo"<tr>";
	echo"<td>".$age ."</td>";
    echo"<td>".$initial ."</td>";
    for($i=12;$i>0;$i--){
	    for($j=30;$j>0;$j--){
	    	$interest= (($fbalance/100)*$rate)/365;
	    	
	    	$fbalance=$fbalance+$interest;
	    	


	    }
	    $fbalance=$fbalance+$montly;
	    $fbalance= sprintf('%0.2f',$fbalance);
	   

	}
	
	$finterest= ($fbalance-$initial)-($montly*12);
	$initial=$fbalance;
	echo"<td>".$finterest."</td>";
	echo"<td>".($montly*12)."</td>";
	echo"<td>".$fbalance."</td>";

	echo"</tr>";
	$age++;
}
?>
</table>


</body>
<html>