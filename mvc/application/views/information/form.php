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
            .column {width:460px; margin: 10px auto}
            .column h1{margin: 20px 0; border-bottom: 1px solid #ccc;}
            .column label{display: block;margin-bottom: 4px;}
            .column input[type=text],.column input[type=email], .column input[type=password], .column textarea{width: 400px;height: 24px; padding: 4px;margin-bottom: 10px;border: 1px solid #c9c9c9;font-size: .8em;}
            .column input[type=date] {width: 100px;height: 24px; padding: 4px;margin-bottom: 10px;border: 1px solid #c9c9c9;font-size: .8em;}
            .row{margin: 20px}
            .row div{float: left; margin-right:10px;width:180px;}
            .column textarea {height: 156px;font-size: 1.1em;}
            #save_button {display: block;font-size: 1.0em;background-color: #F0F0F0;padding: 3px 8px;border: 1px solid #E5E5E5;float: left; width:170px;}
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
 
        <form method= "post" action="index.php?q=information/vacationInformation"> 
            <section id="featured">
                <h1 class="section_title">Information for Vacations</h1>
                <div class="clearfix"></div>
                <div class="column">
                   <div class="row">
                        <div>
                            <label>From:</label>
                            <input type="date" id="from" name="from" size="20" required/>
                        </div>
                        <div>
                            <label>To:</label>
                            <input type="date" id="to" name="to" size="20" required/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <label>Select Type</label>
                        <select name="type" required>
                            
                            <option value="4">All</option>
                            <option value="0">Vacation (Paid)</option>
                            <option value="1">Vacation (Non-Paid)</option>
                            <option value="2">School Leave</option>
                            <option value="3">Sick Leave</option>
                            
                        </select>
                  		<div class="clearfix"></div>
                    </div>
              	   	<div class="row">
 						<button id="save_button">Save</button>
               		</div>
                </div>  
                <div class="clearfix"></div>              
		</form>
 
</body>
