
<html>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="stil2.css"/>
<?php
$serv='localhost';
$nume='buildyourfuture';
$pass='d1F0S3D644lgvHcy';
$con=mysql_connect($serv, $nume, $pass);
if(!$con)
{
mysql_die();
}
mysql_select_db('buildyourfuture', $con);
$s=mysql_query("SELECT * FROM info");
while($k=mysql_fetch_array($s))
{
	$t_activities=$k['t_activities'];
	$activities=$k['activities'];
}
?>
<h1> <?php echo $t_activities;?></h1>

<div> <?php echo $activities;?>

</div>







</html>