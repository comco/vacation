<div class="container">
    <section class="register-form">
        <form id="add-new-user-form" method= "post" action="index.php?q=users/addNewUser"> 
            <fieldset>
                <legend>Add new user</legend>
                <input type="text" class="form-control form-first" name="name" placeholder="Name" autofocus required>
                <input type="text" class="form-control form-middle" name="email" placeholder="Email" required>
                <input type="text" class="form-control form-middle" name="username" placeholder="Username" required>
                <input type="password" class="form-control form-last" name="password" placeholder="Password" required>
                <select name="type" class="form-control" required>
                    <option value="">Select type</option>
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                </select>
                <input type="submit" class="btn btn-block btn-primary" type="submit" value="Register">
            </fieldset>
        </form>
    </section>
</div>

<script>
$(document).ready(function () {

    $('#add-new-user-form').validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            username: {
                required: true
            },
            password: {
                required: true
            }
        },
        submitHandler: function (form) {
            alert('Successfully created a new user.');
            form.submit();    
        }
    });

});
</script>
