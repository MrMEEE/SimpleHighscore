<?php

require("connect.php");

if($_POST['action'] == "logtime"){

	error_log($_POST['name'].$_POST['email'].$_POST['company'].$_POST['lap'].$_POST['eula1'].$_POST['eula2']);
	
	$laparray = explode(":", $_POST['lap']);

	$lapmsecs = $laparray[2]*10 + $laparray[1]*1000 + $laparray[0]*60000;

	$query = "INSERT INTO `times` (name,email,company,lap,laporiginal,eula1,eula2) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['company']."','".$lapmsecs."','".$_POST['lap']."','".$_POST['eula1']."','".$_POST['eula2']."')";

	error_log($query);

	mysqli_query($conn,$query);

}else{
	echo "<tr>
                    <th>Navn</th>
                    <th>Firma</th>
                    <th>Bedste tid</th>
                  </tr>";
	$query = mysqli_query($conn, "SELECT * FROM `times` WHERE company != 'Aperta' ORDER BY lap ASC");
	while ($row = mysqli_fetch_array($query)) {
	$mins = (int)($row['lap'] / 60000);
	$secs = (int)(($row['lap'] % 60000) / 1000);
	$msecs = (int)(($row['lap'] % 60000 % 1000) / 10);
	
	if ($secs < 10){
		$secs = "0".$secs;
	}

	if ($msecs < 10){
                $msecs = "0".$msecs;
        }

	echo "<tr>
	<td>".$row['name']."</td>
	<td>".$row['company']."</td>
	<td>".$mins.":".$secs.":".$msecs."</td>
	</tr>";	
	}
	

}

?>
