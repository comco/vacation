<div class="container">
    <section class="request-form">
        <form id="add-days-form" method= "post" action="index.php?q=days/addDays"> 
            <fieldset>
                <legend>Add days</legend>
                <input type="hidden" name="user_id" value="<?=$_SESSION['new_user_id']?>">
                <select name="type" class="form-control">
                    <option value="">Select type</option>
                    <option value="paid">Vacation (Paid)</option>
                    <option value="unpaid">Vacation (Non-Paid)</option>
                    <option value="university">School Leave</option>
                    <option value="sick">Sick Leave</option>
                </select> 
                <input type="number" class="form-control form-first" name="days" placeholder="Days"min=1 required autofocus>
                <input type="submit" class="btn btn-block btn-primary" value="Add">
            </fieldset>
        </form>
    </section>
</div>

<script>
$(document).ready(function () {

    $('#add-days-form').validate({
        rules: {
            days: {
                required: true
            },
            type: {
                required: true
            }
        },
        submitHandler: function (form) {
            alert('Days added successfully.');
            form.submit();
        }
    });

});
</script>
