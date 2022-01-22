				<?php

				$hostname="35.239.159.236";
				$username= "root";
				$password= "Vinay@11";
				$database="db_voting";

				// UserInput Test
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					
					  return $data;
					}	

								

?>