<?php if (isset($params['css']) && is_array($params['css'])) :?>
	<?php foreach($params['css'] as $css) : ?>
		<link href="<?=$css ?>" rel="stylesheet">	
	<?php endforeach; ?>
	<?php else :?>
	<link href="assets/main.css" rel="stylesheet">
        <?php endif; ?>

<div class="container">
    <section class="login-form">
        <form method= "post" action="index.php?q=users/login"> 
            <fieldset>
                <legend>Login</legend>
                <input type="text" class="form-control form-first" name="username" placeholder="Username" required autofocus />
                <input type="password" class="form-control form-last" name="password" placeholder="Password" required />
                <button class="btn btn-block btn-primary" type="submit">Login</button>
            </fieldset>
        </form>
    </section>
</div>
