<!--  http://www.javascriptkit.com/javatutors/createelementcheck2.shtml -->
<head>
<script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
    }
</script>
 
<script>
if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
    jQuery(function($){ //on document.ready
        $('#from').datepicker();
        $('#to').datepicker();
    })
}
</script>

	<style>
           .column {width:460px; float: left;}
            .column h1{margin: 20px 0; border-bottom: 1px solid #ccc;}
            .column label{display: block;margin-bottom: 4px;}
            .column input[type=text],.column input[type=email], .column input[type=password], .column textarea{width: 400px;height: 24px; padding: 4px;margin-bottom: 10px;border: 1px solid #c9c9c9;font-size: .8em;}
            .input-small {width: 100px;height: 24px; padding: 4px;margin-bottom: 10px;border: 1px solid #c9c9c9;font-size: .8em;}
            .controls div{ margin:10px 0px;width:130px;}

            .control-group div input[type="date"]{height:35px;font-size:20px;width: 130px;}
            .block {display: block;} 
            .inline {display: inline-block; margin-right: 30px; width: 130px;}
            .controls-inline :last-child{margin-right: 0px;}
            #save_button {display: block;font-size: 1.0em;padding: 3px 8px;border: 1px solid #E5E5E5;float: left; width:300px;height:50px;}
	 </style>
    
</head>
 
<body>
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
                            <label class="block">From:</label>
                            <input type="date" class="input-small" id="from" name="from" size="20" required/>
                        </div>

                        <div class="inline">
                            <label class="block">To:</label>
                            <input  type="date" class="input-small" id="to" name="to" size="20" required/>
                        </div>

                    </div>
                	<div class="controls">
                        <div class="selection">
                            <label class="control-label">Select Type</label>
                            <select name="type" required>
                                
                                <option value="all">All</option>
                                <option value="paid">Vacation (Paid)</option>
                                <option value="unpaid">Vacation (Non-Paid)</option>
                                <option value="university">School Leave</option>
                                <option value="sick">Sick Leave</option>
                                
                            </select>
                        </div>

                         <div class="selection">
                        	<label class="control-label">Select Status</label>
                            <select name="status" required>
                                
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
              	             
		</form>
 
</body>
