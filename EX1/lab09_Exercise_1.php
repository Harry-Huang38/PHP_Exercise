<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	echo   "<title>Lab09_Exercise_1</title>";
	echo "<p>100*100 Multiplication Table </p>";

	echo "<table width = '' border = '2' cellpadding = '0' cellspacing='0';>";
	for($column = 0; $column  <= 100; $column ++) {
        if($column == 0){
                 echo"<tr>";
	    echo "<th><p></p></th>";
            for($firstrow = 1; $firstrow  <= 100; $firstrow ++) {
                echo"<th>" .$firstrow. "</th>";
        }
        echo"</tr>";
    }else{
            echo "<tr>";
            echo "<th>" .$column. "</th>";
            for($row=1;$row<=100;$row++){
			    echo "<td > {$row}x{$column}=".($row*$column)."</td>";
		    }
            echo"</tr>";
        }
    }
	echo "</table>";
?>
