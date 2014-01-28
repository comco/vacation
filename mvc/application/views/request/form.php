<!--  http://www.javascriptkit.com/javatutors/createelementcheck2.shtml -->
<head>
<script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
//    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
//    }
</script>
 
<script>
//if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
    jQuery(function($){ //on document.ready
        $('#from').datepicker();
        $('#to').datepicker();
    })
//}
</script>

	<style>
            .column {width:460px; float: left;}
            .column h1{margin: 20px 0; border-bottom: 1px solid #ccc;}
            .column label{display: block;margin-bottom: 4px;}
            .column input[type=text],.column input[type=email], .column input[type=password], .column textarea{width: 400px;height: 24px; padding: 4px;margin-bottom: 10px;border: 1px solid #c9c9c9;font-size: .8em;}
            .column input[type=date] {width: 100px;height: 24px; padding: 4px;margin-bottom: 10px;border: 1px solid #c9c9c9;font-size: .8em;}
/*             .twofields{height:30px;} */
            .twofields div{float:left;margin:10px;width:130px;}
            .twofields div input.datepicker { 
                height:35px;
                width:130px;
                font-size:20px;
            }
            
            .column textarea {height: 100px;font-size: 1.1em;width:300px;}
            #save_button {display: block;font-size: 1.0em;padding: 3px 8px;border: 1px solid #E5E5E5;float: left; width:300px;height:50px;}
	 </style>
    
</head>
 
<body>
 
 <div class="container">
    <section class="request-form">
<!--     <section id="featured"> -->
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
</body>
