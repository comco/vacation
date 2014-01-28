<div class="container">
    <section class="login-form">
        <form id="login-form" method= "post" action="index.php?q=users/login"> 
            <fieldset>
                <legend>Login</legend>
                <input type="text" class="form-control form-first" name="username" placeholder="Username" required autofocus>
                <input type="password" class="form-control form-last" name="password" placeholder="Password" required>
                <input type="submit" class="btn btn-block btn-primary" value="Login">
            </fieldset>
        </form>
    </section>
</div>

<script>
$(document).ready(function () {

    $('#login-form').validate({
        rules: {
            username: {
                required: true
            },
            password: {
                required: true
            }
        }
    });

});
</script>
