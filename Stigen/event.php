<html>
<head>	
	<title>event</title>
	<link rel="stylesheet" type="text/css" href="css/event.css">
</head>

<body>
<a href="phome.htm">back</a><br/><br/>

	<table width='70%'height='10%' border='0'>

	<tr>
                
		<td>EVENT-ID</td>
        <td>EVENT-NAME</td>
		<td>EVENT-LOCATION</td>
		<td>EVENT-TIME</td>
		
		
	</tr>
<?php

include_once("php/config.php");


 $result = mysqli_query($mysqli, "SELECT eventid,eventname,eventlocation,eventtime  FROM event ORDER BY eventid");

while($res = mysqli_fetch_array($result)){		
		echo "<tr>";
        echo "<td>".$res['eventid']."</td>";
		echo "<td>".$res['eventname']."</td>";
		echo "<td>".$res['eventlocation']."</td>";
		echo "<td>".$res['eventtime']."</td>";

		
	}	
?>
</table>
</body>
</html>