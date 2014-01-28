<style>
.column { width:460px; float: left; }
.column h1{margin: 20px 0; border-bottom: 1px solid #ccc;}
.column label{display: block;margin-bottom: 4px;}
.column input[type=text],.column input[type=email], .column input[type=password], .column textarea{width: 400px;height: 24px; padding: 4px;margin-bottom: 10px;border: 1px solid #c9c9c9;font-size: .8em;}
.column input[type=date] {width: 100px;height: 24px; padding: 4px;margin-bottom: 10px;border: 1px solid #c9c9c9;font-size: .8em;}
.twofields div{float:left;margin:10px;width:130px;}
.twofields div input.datepicker { 
    height:35px;
    width:130px;
    font-size:20px;
}

.column textarea {height: 100px;font-size: 1.1em;width:300px;}
#save_button {display: block;font-size: 1.0em;padding: 3px 8px;border: 1px solid #E5E5E5;float: left; width:300px;height:50px;}
</style>
<div class="container">
    <section class="request-form">
        <form method= "post" action="index.php?q=request/vacationRequest">
            <legend>New vacation request</legend>
            <div class="column">
                <div>
                    <label for="type">Type</label>
                    <select name="type" class="form-control" required>
                        <option value="">Select type</option>
                        <option value="1">Vacation (Paid)</option>
                        <option value="2">Vacation (Non-Paid)</option>
                        <option value="3">School Leave</option>
                        <option value="4">Sick Leave</option>
                    </select>
                </div>
                <div class="clearfix"></div>
                <div class="twofields">
                    <div>
                        <label>From:</label>
                        <input type="text" id="from" name="from" class="form-control datepicker" required/>
                    </div>
                    <div>
                        <label>To:</label>
                        <input type="text" id="to" name="to" class="form-control datepicker" required/>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div>
                    <label for="type">Comments</label>
                    <textarea name="comment" class="form-control"></textarea>
                    <button id="save_button" class="btn btn-block btn-primary" type="submit">Save</button>
                </div>
            </div>
        </form>
    </section>	
</div>
