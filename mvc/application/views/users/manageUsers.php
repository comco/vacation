<?php if (isset($params['css']) && is_array($params['css'])) :?>
	<?php foreach($params['css'] as $css) : ?>
		<link href="<?=$css ?>" rel="stylesheet">	
	<?php endforeach; ?>
	<?php else :?>
	<link href="assets/main.css" rel="stylesheet">
        <?php endif; ?>

<style>
            .table {width:600px;margin-left:280px;}
            #delete_button{width:70px;margin:5px;color:red;}
            #view_button{width:70px;margin:5px;}
/*             .history_table {padding-top: 50px} */
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

<div class="container">
    <section class="login-form">
        <form method= "post" action="index.php?q=users/addNewUser"> 
            <fieldset>
                <button class="btn btn-block btn-primary" type="submit">Add new user</button>
            </fieldset>
        </form>
    </section>
</div>

<div class="history_table">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>USERNAME</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th colspan="2">OPTIONS</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach ($params as $row) {?>
            <tr>
                <td><?=$row['username']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['email']?></td>
                <td style="width:70px;">
                    <form action="index.php?q=users/viewUser" method="post">
                        <input type="hidden" name="user_id" value="<?=$row['user_id']?>" />
                        <input type="submit" class="btn btn-inline btn-primary" value="View"/>
                    </form>    
                </td>
                <td style="width:70px;">
                    <form action="index.php?q=users/deleteUser" method="post" onsubmit="return confirm('Are you sure?');">
                        <input type="hidden" name="user_id" value="<?=$row['user_id']?>" />
                        <input type="submit" class="btn btn-inline btn-danger" value="Delete"/>
                    </form>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>        
