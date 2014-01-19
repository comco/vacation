<?php if (isset($params['css']) && is_array($params['css'])) :?>
	<?php foreach($params['css'] as $css) : ?>
		<link href="<?=$css ?>" rel="stylesheet">	
	<?php endforeach; ?>
	<?php else :?>
	<link href="assets/main.css" rel="stylesheet">
	<?php endif; ?>
	
	
		<section id="login">
				<form method= "post" action="index.php?q=users/login"> 
				<fieldset>
					<legend>Login</legend>
					<label for="username">Username</label>
					<input type="text" name="username" id="name"/><br />
					<label for="password">Password</label> 
					<input type="password" name="password" id="password"></textarea><br /> 
					<input type="hidden" name="role" id="role"/><br /> 
				</fieldset>
			<input type="submit" value="Login" class="send"/> 
			</form>
		</section>
