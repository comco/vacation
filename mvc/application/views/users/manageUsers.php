<?php if (isset($params['css']) && is_array($params['css'])) :?>
	<?php foreach($params['css'] as $css) : ?>
		<link href="<?=$css ?>" rel="stylesheet">	
	<?php endforeach; ?>
	<?php else :?>
	<link href="assets/main.css" rel="stylesheet">
        <?php endif; ?>

<div class="container">
    <section class="login-form">
        <form method= "post" action="index.php?q=users/addNewUser"> 
            <fieldset>
                <button class="btn btn-block btn-primary" type="submit">Add new user</button>
            </fieldset>
        </form>
    </section>
</div>

<div id="history_table">
	<table class="table" border=2>
		<tbody>
			<?php

			echo "<tr> <th>USERNAME</th> <th>NAME</th> <th>EMAIL</th> <th>OPTIONS</th> </tr>";
				foreach ($params as $row) {
					echo "<tr " . $class . "> "
							. "<th>" . $row['username']. "</th>"
							. "<th>" . $row['name']. "</th>"
							. "<th>" . $row['email']. "</th>"
							. "<th>" . $row['']. "</th>"
						. "</tr>";
				}
			?>
		</tbody>
	</table>
</div>
