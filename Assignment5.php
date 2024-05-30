
<!DOCTYPE html>
<!--
 Author: Shannon Maragh
 Description: This program imports the information from csv file 
 and displays the information in a table. 
 Assignment 5 
 Due Date: November 27th 
 Course Title: Server-side Scripting 
 Meeting time: Saturday 9:00-12:00pm 
-->





<html>
     <body>
           <form name="input" method="POST">
		        Name: <input type="text" name="fullname"><br>
		        Date: <input type ="date" name="submit" value="login">
		   <input type="submit" name="submit" value="login">
		   </form>
		   
		   <form action="assignment3.php">
		   <input type="submit" value="start again">
		   </form>
		   
		   
		   </body>
		    
		   
		   <?php 
		   if (isset($_POST['submit'])) 
		   {
		   //var_dump($_POST);
		   echo "<html><body><table>\n\n";
			//define input file

			$row = 1;
			//opens csv file, if the csv exist
			if (($filep = fopen("HW5-DataFile.csv", "r")) !== FALSE)
			{
   
    			echo '<table border="1">';
			//loops file into table 
    		while (($data = fgetcsv($filep, 1000, ",")) !== FALSE) {
        		$num = count($data);
				if ($row == 1)
				{
					echo '<thead><tr>';
				}
				else
				{
					echo '<tr>';
				}
			
			for ($c=0; $c < $num; $c++) {
				if(empty($data[$c])) 
				{
				$value = "&nbsp;";
				}
				else
				{
				$value = $data[$c];
				}
				if ($row == 1) 
				{
					echo '<th>'.$value.'</th>';
				}
				else
				{
					echo '<td>'.$value.'</td>';
				}
        }
       
			if ($row == 1) {
				echo '</tr></thead><tbody>';
			}
			else
			{
				echo '</tr>';
			}
			$row++;
    }
   
    echo '</tbody></table>';
	//closes csv file 
    fclose($filep);
}
echo "\n</table></body><html>";
die();
}

?>

</html>
