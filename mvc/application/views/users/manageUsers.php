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

<div>
	<form>
		<table class="table" border=2>
			<tbody>
				<?php

				echo "<tr> <th>USERNAME</th> <th>NAME</th> <th>EMAIL</th> <th>OPTIONS</th> </tr>";
					foreach ($params as $row) {
						echo "<tr " . $class . "> "
							. "<th>" . $row['username']. "</th>"
							. "<th>" . $row['name']. "</th>"
							. "<th>" . $row['email']. "</th>"
							. "<th>";
				?>
						<input id="view_button" class="btn btn-inline btn-primary" type="button" value="View" onclick='alert("Hello World!")'>
						<input id="delete_button" class="btn btn-inline btn-primary" type="button" value="Delete">
				<?php
					 	echo "</th></tr>";
				}
			?>
			</tbody>
		</table>
	</form>
</div>


<script type="text/javascript">

// var button;
// button = document.getElementById('view_button');
// button.onclick = function () { 
// 	
// };

var deleteButton;
deleteButton = document.getElementById('delete_button');
deleteButton.onclick = function () { 
	
};
</script>
