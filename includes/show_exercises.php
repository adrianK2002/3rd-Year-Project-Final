<?php
	include_once '../config.php';

									//read all exercises from db
						$sql = "SELECT * FROM wokrout";
						$result = $link->query($sql);
						
						if (!$result) {
							die("Invalid querry: " .$link->error);
						}
						//read data of row
						while($row = $result->fetch_assoc()){
							echo "<tr>
								<td>" . $row["workout"] ."</td>
								  </tr>";
						}
?>