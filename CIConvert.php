<?php 
    
	function csvstring_to_array(&$string, $CSV_SEPARATOR = ';', $CSV_ENCLOSURE = '"', $CSV_LINEBREAK = "\n") { 
	  $o = array(); 

	  $cnt = strlen($string); 
	  $esc = false; 
	  $escesc = false; 
	  $num = 0; 
	  $i = 0; 
	  while ($i < $cnt) { 
	    $s = $string[$i]; 

	    if ($s == $CSV_LINEBREAK) { 
	      if ($esc) { 
	        $o[$num] .= $s; 
	      } else { 
	        $i++; 
	        break; 
	      } 
	    } elseif ($s == $CSV_SEPARATOR) { 
	      if ($esc) { 
	        $o[$num] .= $s; 
	      } else { 
	        $num++; 
	        $esc = false; 
	        $escesc = false; 
	      } 
	    } elseif ($s == $CSV_ENCLOSURE) { 
	      if ($escesc) { 
	        $o[$num] .= $CSV_ENCLOSURE; 
	        $escesc = false; 
	      } 

	      if ($esc) { 
	        $esc = false; 
	        $escesc = true; 
	      } else { 
	        $esc = true; 
	        $escesc = false; 
	      } 
	    } else { 
	      if ($escesc) { 
	        $o[$num] .= $CSV_ENCLOSURE; 
	        $escesc = false; 
	      } 

	      $o[$num] .= $s; 
	    } 
	    $i++; 
	  } 
	  return $o; 
	} 
    
    
 
  $file           = "lang_master.csv";
  $fh   				  = fopen($file, 'r');
	$language_files = array();
	$output_base    = './output/';


	//find out all lang files (columns) we're dealing with...
	$header = fgetcsv($fh);
	foreach($header as $h){
		if($h != 'key'){
			$language_files[] = $h;
		}
	}
	
	//make a directory in the output folder for each language
	foreach($language_files as $l){	
		mkdir($output_base . $l, 0777, true);	
	}


	foreach($language_files as $key => $l){
	
		$index_files = array();
		rewind($fh);
		$header = fgetcsv($fh); //move cursor past header row
	
		//iterate through all rows of the csv
		$lfh = false;
		
		while($line = fgets($fh, 9999999)){
		
			$line = csvstring_to_array($line, ',', '"', "\n");		
			
			if(!$line[0])
				continue; //this is a blank line between groups
			
			$index_file_name = substr($line[0], 0, strpos($line[0], '|'));
			$key_name 		 = substr($line[0], (strpos($line[0], '|') + 1));
			
			//have we see this before? no == make new file
			if(!in_array($index_file_name, $index_files)){
			
				$index_files[] = $index_file_name;
			
				//no -- make new file, close existing if open (not 1st)			
				if($lfh !== false)
					fclose($lfh);
					
				$lfh = fopen($output_base . $l . '/' . $index_file_name . '_lang.php', 'w');
				fwrite($lfh, '<?php ' . PHP_EOL . PHP_EOL);
				fwrite($lfh, '$lang["' . $key_name . '"]		= "' . str_replace('"', '\"', $line[($key + 1)]) . '";' . PHP_EOL);
		
			}else{
			
				//yes -- add to file we're working on
				fwrite($lfh, '$lang["' . $key_name . '"]		= "' . str_replace('"', '\"', $line[($key + 1)]) . '";' . PHP_EOL);	
		
			}
		
		}
				
	}