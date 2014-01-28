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
		<thead>
            <tr>
                <th>OWNER</th>
                <th>FROM</th>
                <th>TO</th>
                <th>DURATION</th>
                <th>TYPE</th>
                <th colspan="3">STATUS</th>
            </tr>
        </thead>
        
        <?php foreach ($params as $row) {
        	$status_column = "";
        	$class = "";
        	if($row['status'] == 'pending') {
				$status_column = "color:#003399;font-weight:bold";
				$class = "warming";
			}
			else if($row['status'] == 'accepted') {
				$status_column = "color:#00CC00;font-weight:bold";
				$class = "success";
			}
			else if($row['status'] == 'rejected') {
				$status_column = "color:#FF0000;font-weight:bold";
				$class = "danger";
			}?>
            <tr class="<?=$class?>" style="height:50px;">
                <td><?=$row['name']?></td>
                <td><?=$row['start_date']?></td>
                <td><?=$row['end_date']?></td>
                <td><?=$row['duration']?></td>
                <td><?=$row['type']?></td>
                
                <?php if($_SESSION['is_admin'] && $row['status'] == 'pending') { ?>
						<td style="<?=$status_column?>"><?=$row['status']?></td>
						<td style="width:50px;">
							<form action="index.php?q=users/acceptRequest" method="post" onsubmit="return confirm('Are you sure?');">
								<input type="hidden" name="request_id" value="<?=$row['request_id']?>" />
								<input type="submit" class="btn btn-inline btn-success" value="Accept"/>
							</form>
						</td>
						<td style="width:50px;">
							<form action="index.php?q=users/rejectRequest" method="post" onsubmit="return confirm('Are you sure?');">
								<input type="hidden" name="request_id" value="<?=$row['request_id']?>" />
								<input type="submit" class="btn btn-inline btn-danger" value="Reject"/>
							</form>
						</td>
				<?php } else { ?>
					<td style="<?=$status_column?>"><?=$row['status']?></td>
					<td style="width:50;"> </td>
					<td style="width:50;"> </td>
				<?php } ?>
            </tr>
        <?php }?>
        </tbody>
		
	</table>
</div>
