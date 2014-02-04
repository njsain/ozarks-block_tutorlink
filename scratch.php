<?PHP
$file = fopen("scratch.csv","r");
while ($csvrow = fgetcsv($file)) {
	if(strpos($csvrow[0],",")){ 
		$studentName = explode(", ",$csvrow[0]); 
		echo $studentName[1]; 
	}	
}
?>
