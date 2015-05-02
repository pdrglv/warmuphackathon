<?php
		$address = $_POST['endereco'];
		$data = $_POST['data'];
		$hour = $_POST['hora'];
                $datafile = fopen("data.txt", "a");

		$processed_data = $address." | ".$data." | ".$hour;
		if(fwrite($datafile, $processed_data)){
			echo "OK!";		
		} else {
			echo "SOMETHING GOES WRONG.";
		}
		fclose($datafile); 
?>

	