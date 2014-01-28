<style>
.column {width:460px; float: left;}
.column h1{margin: 20px 0; border-bottom: 1px solid #ccc;}
.column label{display: block;margin-bottom: 4px;}
.column input[type=text],.column input[type=email], .column input[type=password], .column textarea{width: 400px;height: 24px; padding: 4px;margin-bottom: 10px;border: 1px solid #c9c9c9;font-size: .8em;}
.input-small {width: 100px;height: 24px; padding: 4px;margin-bottom: 10px;border: 1px solid #c9c9c9;font-size: .8em;}
.controls div{ margin:10px 0px;width:130px;}

.control-group div.datepicker {
    height: 35px;
    font-size: 20px;
    width: 130px;
}

.block {display: block;} 
.inline {display: inline-block; margin-right: 30px; width: 130px;}
.controls-inline :last-child{margin-right: 0px;}
#save_button {display: block;font-size: 1.0em;padding: 3px 8px;border: 1px solid #E5E5E5;float: left; width:300px;height:50px;}
</style>
<!-- 
<form>
<b>Date of birth:</b>
<input type="date" id="birthday" name="birthday" size="20" />
<input type="button" value="Submit" name="B1"></p>
</form>
 -->

<form class="form-horizontal" method= "post" action="index.php?q=information/vacationInformation"> 
    <section class="request-form">
        <legend>Information for Vacations</legend>
        <div class="clearfix"></div>
        <div class="control-group">
            <div class="controls-inline">
                <div class="inline">
                    <label class="block" for="from">From:</label>
                    <input type="text" class="form-control datepicker" id="from" name="from" size="20"/>
                </div>

                <div class="inline">
                    <label class="block" for="to">To:</label>
                    <input  type="text" class="form-control datepicker" id="to" name="to" size="20"/>
                </div>

            </div>
            <div class="controls">
                <div class="selection">
                    <label class="control-label" for="type">Select Type</label>
                    <select name="type" class="form-control">

                        <option value="all">All</option>
                        <option value="paid">Vacation (Paid)</option>
                        <option value="unpaid">Vacation (Non-Paid)</option>
                        <option value="university">School Leave</option>
                        <option value="sick">Sick Leave</option>

                    </select>
                </div>

                <div class="selection">
                    <label class="control-label" for="status">Select Status</label>
                    <select name="status" class="form-control">

                        <option value="all">All</option>
                        <option value="pending">Pending</option>
                        <option value="accepted">Accepted</option>
                        <option value="rejected">Rejected</option>

                    </select>
                </div>
            </div>
            <div class="controls">
                <button id="save_button" class="btn btn-block btn-primary" type="submit">Submit</button>
            </div>   
        </div>
    </section>      
</form> 
