<!DOCTYPE>
<htnl>
	<head>
		<title>PHP Cal</title>
		<style>
			table, tr, td {
				border-collapse: collapse;
				border: 1px solid #333;
			}
			td:last-child {
				color: red;
			}
			table tr td u {
				color: blue;
			}
		</style>
	</head>
	<body>
	
<!-- php starts here -->	
	
<?php
	function kalender(){
		$jml_hari = date('t', time());
		$hari = array('<td>Senin','Selasa','Rabu','Kamis',"Jum'at",'Sabtu',"Minggu");
		$init = date('N',time()) - 1;
		$dei = 1; $tgl = date('j',time());
		echo "<table><tr>".implode('</td><td>',$hari).'</tr><tr>';
		for ($tlg=0;$tlg < $jml_hari+$init;$tlg++){
			if ($tlg % 7 == 0){
				echo "</tr><tr>";
			}
			echo "<td>".($tlg < $init ? "": ( $dei == $tgl ? "<u>".$dei++."</u>" : $dei++ ))."</td>";
		}
		echo "</tr></table>";
	}
	kalender();
?>


	</body>
</html>

		