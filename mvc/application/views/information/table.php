<div id="history_table">
	<table class="table" border=2>
		<tbody>
			<?php

			echo "<tr> <th>FROM</th> <th>TO</th> <th>DURATION</th> <th>TYPE</th> <th>STATUS</th> </tr>";
				foreach ($params as $row ) {
					$class = "";
					if ($row['status'] == 'accepted') {
						$class = 'class="success"';
					}
					else if ($row['status'] == 'pending') {
						$class = 'class="active"';
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