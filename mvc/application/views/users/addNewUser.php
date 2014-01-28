<?php if (isset($params['css']) && is_array($params['css'])) :?>
	<?php foreach($params['css'] as $css) : ?>
		<link href="<?=$css ?>" rel="stylesheet">	
	<?php endforeach; ?>
	<?php else :?>
	<link href="assets/main.css" rel="stylesheet">
        <?php endif; ?>

<div class="container">
    <section class="register-form">
        <form method= "post" action="index.php?q=users/addNewUser"> 
            <fieldset>
                <legend>Register new user</legend>
                <input type="text" class="form-control form-first" name="name" placeholder="Name" required autofocus />
                <input type="text" class="form-control form-middle" name="email" placeholder="Email" required />
                <input type="text" class="form-control form-middle" name="username" placeholder="Username" required />
                <input type="password" class="form-control form-last" name="password" placeholder="Password" required />
                <select name="type" class="form-control" required>
                    <option value="">Select type</option>
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                </select>
                <button class="btn btn-block btn-primary" type="submit">Register</button>
            </fieldset>
        </form>
    </section>
</div>
