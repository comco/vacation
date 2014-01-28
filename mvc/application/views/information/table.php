<head>
	<style>
			.history_table {padding-top: 50px}
			th {font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 12px;}
			thead { border-color: rgb(255, 255, 255)}
       		thead th:first-child {border-top-left-radius: 4px; border-color: rgb(255, 255, 255)}
			thead th:last-child {border-top-right-radius: 4px;  border-color: rgb(255, 255, 255)}
          	thead th {background: linear-gradient(to bottom, #80B2E6 0%, #4D94DB 0%, #0066CC 100%) repeat scroll 0% 0% transparent;
           				font-family: 'Open Sans',serif;
						color: rgb(255, 255, 255);
						font-size: 12px;
						font-weight: bold;}

	 </style>
    
</head>

<div class="history_table">
	<legend>Vacation History</legend>
	<table class="table table-bordered table-hover">
		
			<?php

			echo "<thead> <tr> <th>FROM</th> <th>TO</th> <th>DURATION</th> <th>TYPE</th> <th>STATUS</th> </tr> </thead>";
			echo "<tbody>";
				foreach ($params as $row ) {
					$class = "";
					if ($row['status'] == 'accepted') {
						$class = 'class="success"';
					}
					else if ($row['status'] == 'pending') {
						$class = 'class="warming"';
					}
					else if ($row['status'] == 'rejected') {
						$class = 'class="danger"';
					}
					echo "<tr " . $class . "> "
							. "<th>" . $row['start_date']. "</th>"
							. "<th>" . $row['end_date']. "</th>"
							. "<th>" . $row['duration']. "</th>"
							. "<th>" . $row['type']. "</th>"
							. "<th>" . $row['status']. "</th>"
						. "</tr>";
				}
			?>
		</tbody>
	</table>
</div>