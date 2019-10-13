<?

 $val1 = B234567;
 $val2 = B777888;

echo $val1."<br>".$val2;
echo "<br>";

 $total = $val1.$val2;
echo $total;

 $md5 = md5($total);
echo "<br>";
echo $md5;
?>

<h2>CALON2</h2>
1 - B555666 <br>
2 - B777888 <br>
3 - B999000 <br>

<?
$Calon = array("B555666", "B777888", "B999000");
$Voter = B234567;
for ($x=0; $x<3; $x++){
	$newmd5 = md5($Voter.$Calon[$x]);
	echo "<br>".$newmd5;
	if ($newmd5 == $md5){
		echo " sama";
		break;
	}

}

?>
