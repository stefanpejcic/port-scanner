<?php 
$server_ip= $_POST['server']; 

$server_ip = gethostbyname($server_ip);
$list_posts = array(20, 21, 22, 23, 25, 42,43, 53, 67, 69,80, 110, 115,123,137,138,139,143,161,179, 443,445,514,933,995,1080, 1433, 3128,3268,3306, 3389, 5900,5938,8080);
    

if (empty($_POST["server"]) || !filter_var($server_ip, FILTER_VALIDATE_IP))
{
	echo "<li>
	<div class=\"tool-result-div\">
	<div class=\"tool-result-header\">

	Rezultat za:     $server_ip

	</div><div class='table-responsive'>

	<table class='table table-striped which' width='100%' cellspacing='10px'>
	<tbody>
	<tr class='answerRow'>
	Invalid IP Server!
	</tr>
	</tbody></table></div></div></li>
	";
}

else
{
$status = array();
foreach($list_posts as $port) {
	if($process = @fsockopen($_POST['server'], $port, $err, $loi, 1)) {
		$status[$port] = true;
		fclose($process);
	} else {
		$status[$port] = false;
	}
}



echo "<li>
<div class=\"tool-result-div\">
<div class=\"tool-result-header\">
Rezultat za:     $server_ip


</div><div class='table-responsive'>

<table class='table table-striped which' width='100%' cellspacing='10px'>
<tbody>


";



foreach($status as $port=>$val)    {
	$prot = getservbyport($port,"tcp");

echo "<tr class='answerRow'>";

	if($val) {
		 echo "<td class='row_port1'><img width=\"16\" align=\"absmiddle\" height=\"16\" src=\"assets/img/available.png\"> $prot ($port)
		</td>
<td class='row_port2'>
		 <span class=\"label label-success\"> OTVOREN </span></td><td class='row_port3'>Port $port na $server_ip je otvoren!</td>";

	}
	else {
		 echo "
		<td class='row_port1'><img width=\"16\" align=\"absmiddle\" height=\"16\" src=\"assets/img/taken.png\"> $prot ($port)
		</td>
<td class='row_port2'>
		 <span class=\"label label-danger\"> ZATVOREN </span></td><td class='row_port3'>Port $port na $server_ip je zatvoren!</td>";
	}


echo "
</tr>
";  

}



echo "
</tbody>
</table></div></li>";

}
?>