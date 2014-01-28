<head>
	<style>
			.history_table {padding-top: 50px}
			td {font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 12px;}
			thead { border-color: rgb(255, 255, 255)}
       		thead th:first-child {border-top-left-radius: 4px; border-color: rgb(255, 255, 255)}
			thead th:last-child {border-top-right-radius: 4px;  border-color: rgb(255, 255, 255)}
          	thead th {background: linear-gradient(to bottom, #80B2E6 0%, #4D94DB 0%, #0066CC 100%) repeat scroll 0% 0% transparent;
           				font-family: 'Open Sans',serif;
						color: rgb(255, 255, 255);
						font-size: 12px;
						font-weight: bold;}
			#table_button {float:right;}

	 </style>
<?php
	function add_admin_tools($status)
	{
		$status_column = "<td>" . $status. "</td>";
		if($status == 'pending') {
			$button = '<button class="btn btn-warning" id="table_button"data-toggle="modal" data-target="#myModal">
	  					Accept/Reject
						</button>';
			$status_column = "<td style='color:#003399;font-weight:bold'>" . $status. $button . "</td>";
		}
		else if($status == 'accepted') {
			$status_column = "<td style='color:#00CC00;font-weight:bold'>" . $status . $button . "</td>";
		}
		else if($status == 'rejected') {
			$status_column = "<td style='color:#FF0000;font-weight:bold'>" . $status . $button . "</td>";
		}
		return $status_column;
	}
?>    
</head>

<div class="history_table">
	<?php 
		if($_SESSION['is_admin']) {
			echo "<legend>Pending Requests</legend>";
		}
		else {
			echo "<legend>Vacation History</legend>";
		}
	?>
	<table class="table table-bordered table-hover">
		
			<?php

			echo "<thead> <tr> <th>OWNER</th> <th>FROM</th> <th>TO</th> <th>DURATION</th> <th>TYPE</th> <th>STATUS</th> </tr> </thead>";
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
					$table = "<tr " . $class . "> "
							. "<td>" . $row['name'] . "</td>"
							. "<td>" . $row['start_date']. "</td>"
							. "<td>" . $row['end_date']. "</td>"
							. "<td>" . $row['duration']. "</td>"
							. "<td>" . $row['type']. "</td>";
					if($_SESSION['is_admin']) {

						$table .=  add_admin_tools($row['status']) . "</tr>";
					}
					else {
						$table .= "<td>" . $row['status']. "</td>". "</tr>";
					}
					echo $table;	
				}
			
			?>
		</tbody>
	</table>
</div>
