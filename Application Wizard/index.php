<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="CSS/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    body{ 
    margin-top:40px; 
}

.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
	
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
input[type="text1"]
{width: 504px;
    }
	input[type="number"]
{width: 150px;
    }
	input[type="text"]
{width: 500px;
    }
	input[type="email"]
{width: 500px;
    }
#textdropdown{
	width: 500px;
	}
#text11{
	width: 500px;
	}
	
	
    </style>
    <script src="CSS/jquery-1.js"></script>
    <script src="CSS/bootstrap.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
	<script src="CSS/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var maxField = 5;
	var addButton = $('.add_button'); 
	var wrapper = $('.field_wrapper');
	var fieldHTML = '<div><input type="text1" name="field_name[]" required="required" pattern="https?://.+" value=""/><a class="remove_button" title="Remove field"><img src="remove-icon.png"/></a></div>'; //New input field html 
	var x = 1; 
	$(addButton).click(function(){ 
		if(x < maxField){ 
			x++; 
			$(wrapper).append(fieldHTML); 
		}
	});
	$(wrapper).on('click', '.remove_button', function(e){ 
		e.preventDefault();
		$(this).parent('div').remove();
		x--; 
	});
});
</script>
</head>
<body style="background-color: #ede1f3;">
	<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-circle btn-default btn-primary">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
    </div>
</div>
<?php if (!isset($_POST['submit'])) { ?>
<form role="form" action="application.php" method="POST">
    <div class="row setup-content" id="step-1" style="display: block;margin-left: 150px;margin-right: 0px;margin-top: 20px;">
	<legend><u>Client Details</u></legend>
        <div class="col-xs-12">
            <div class="col-md-12">
               <div class="form-group has-error">
                    <label class="control-label">Company Name</label>
                    <input maxlength="100" name="cname" pattern="^[a-zA-Z][a-zA-Z ]{4,}$" required="required" class="form-control" placeholder="Enter Company Name" type="text">
                </div>
				<div class="form-group has-error">
		<label class="control-label">Industry Type & Vertical</label>
        <select class="form-control" name="industry" id="textdropdown" required="required">
            <option value="">Select Industry Type</option>
            <option value="IT">Information Technology</option>
            <option value="BPO">BPO</option>
            <option value="ITES">ITES</option>
        </select>
		</div>
		<div class="form-group has-error">
		<label class="control-label">Brief Description of the Business:</label>
		                     
			<textarea maxlength="250" class="form-control" type="textarea" name="textarea" id="text11" placeholder="Brief" required="required"></textarea>
		
			</div>
			</div>
			</div>
			<legend><u>Address</u></legend>
<div class="col-xs-12">
            <div class="col-md-12">
			<div class="form-group has-error">
		<label class="control-label">Region</label>
        <select class="form-control" name="region" required="required" id="textdropdown">
            <option value="">Select a Region</option>
            <option value="INDIA">INDIA</option>
            <option value="USA">USA</option>
            <option value="AMERICA">America</option>
            <option value="NEPAL">Nepal</option>
        </select>
		</div>
		<div class="form-group has-error">
<label class="control-label">Address</label>
		
        <input type="text" class="form-control" name="address" placeholder="Street + No" required="required">
		
		</div>
		<div class="form-group has-error">
		<label class="control-label">City</label>
		
		<input type="text" class="form-control" list="cities" name="city"  placeholder="City" required="required">
		<datalist id="cities">
        <option value="">
        <option value="Nagpur">
        <option value="Thane">
        <option value="Pune">
        <option value="Nasik">
    </datalist>
	</div>
	  <div class="form-group has-error">
    <label class="control-label">State</label>
    
    <select class="form-control" name="states" id="textdropdown" required="required">
         <option value="">Select a Region</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Punjab">Punjab</option>
        <option value="Banglaru">Banglaru</option>
        <option value="Delhi">Delhi</option>
    </select>
	</div>
		
		<div class="form-group has-error">
 <label class="control-label">ZIP Code</label>
		
        <input type="text" class="form-control" name="zipcode"  pattern="^([1-9])([0-9]){5}$" placeholder="ZIP Code" required="required">
		
		</div>
		</div>
		</div>
		<legend><u>Contact Info</u></legend>
        <div class="col-xs-12">
            <div class="col-md-12">
                <div class="form-group has-error">
                    <label class="control-label">Contact Person Name</label>
                    <input maxlength="100" name="name" required="required" class="form-control" placeholder="Enter Contact Person Name" type="text">
                </div>
                <div class="form-group has-error">
                    <label class="control-label">Designation</label>
                    <input maxlength="100" name="designation" required="required" class="form-control" placeholder="Enter Designation" type="text">
                </div> 
			<div class="form-group has-error">
            <label class="control-label">Phone Number <small>(required)</small></label>
                    <input required="required" type="text" pattern="[789][0-9]{9}" name="phonenumber" id="phone" class="form-control" maxlength="28" placeholder="Please Enter Valid Phone Number"/> 
            </div>				
				<div class="form-group has-error">
                    <label class="control-label">Email: <small>(required)</small></label>
                    <input name="email" type="email" required="required" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="ramesh@gmail.com">
                </div> 	
			<div class="form-group has-error">
            <label class="control-label">Skype ID:</label>
                    <input  type="text" pattern="^[A-Za-z0-9_.]{1,15}$" name="username" id="username"  class="form-control" maxlength="28" placeholder="Enter Valid Skype ID"/> 
            </div>
			<div class="form-group has-error">
            <label class="control-label">Website:</label>
                    <input  type="text" pattern="^[www]+\.[a-z0-9.-]+\.[a-z]{2,4}$" name="website" required="required" class="form-control" maxlength="28" placeholder="www.google.com"/> 
            </div>
				<div class="form-group has-error">
            <label class="control-label">Are you the end decision making authority?<small>(required)</small></label>
			<input id='watch-me' name='authority' type='radio' value="Yes" checked /> Yes
            <input id='see-me' name='authority' type='radio' value="No"/> No
			<div id='show-me-two' class="form-group has-error">
			<textarea maxlength="250" class="form-control" name='authorityname' type="textarea" id="text11" value="" placeholder="Brief" ></textarea>
			</div>
			</div>
                <button class="btn btn-primary nextBtn  pull-right btn-default" type="button">Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2" style="display: none;">
		<legend> <u>REQUIREMENTS</u></legend>
        <div class="col-xs-12">
            <div class="col-md-12">
                <div class="form-group has-error" style="height: 100px;" align="right">
			
			<label class="col-sm-4 control-label">Briefly describe the objective of the website/application</label>
			  <div class="col-sm-8">                
			<textarea class="form-control" id="objofapplication" name="objofapplication" required="required" type="textarea">Template look like portal. 1 Main Site 2 Category List 3 Single Page</textarea>
			</div>
			</div>
			<div class="form-group has-error" style="height: 100px;" align="right">
 
			<label class="col-md-4 control-label" >Is it a…?</label>
			
			<div class="col-md-6" align="left" > 
			<input name="category" id="checkboxes" value="Marketing Campaign" type="radio" />
			Marketing Campaign
			
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="category" id="checkboxes1" value="Branding Exercise" type="radio" />
			Branding Exercise
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="category" id="checkboxes2" value="E-commerce Site" type="radio" />
			E-commerce Site
			
			</div>
			
			<div class="col-md-5" align="left" >
			
			
			<input name="category" id="checkboxes3" value="Community hub" type="radio" />
			Community hub 
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<input name="category" id="checkboxes4" value="Online Application" type="radio" style="margin-left: 23.5px;" checked />
			Online Application 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="category" id="checkboxes-5-me" type="radio" value="others" style="margin-left: 5px;"  />
			Others 
			<div id='show-me-other' class="form-group has-error">
			<input maxlength="100" name="othercategory"  class="form-control" value="" placeholder="Enter other types" type="text">
			</div>
			</div>
			</div>

			<div class="form-group has-error" style="height: 150px;" align="right">
 
		<label  class="col-md-4 control-label">What all services do you require?</label>
			
			<div class="col-md-6" align="left" style="width: 655px;">
			
			<input name="service1" id="checkboxes-0" value="Complete web application & development" type="checkbox" checked />
			Complete web application development
			&nbsp;&nbsp;&nbsp;
			
			<input name="service2" id="checkboxes-1" value="Complete Mobile application & development" type="checkbox" />
			Complete Mobile application development
			</div>
			<div class="col-md-4" align="left" style="height: 22px;width: 510px;padding-left:0px;padding-right: 12px;margin-left: 15px;border-right-width: 50px;">
			
			
			<input name="service3" id="checkboxes-2" value="Graphic & UI Design" type="checkbox" />
			Graphic & UI Design
		
			
			&nbsp;
		
			<input name="service4" id="checkboxes-3" value="Revamp existing website" type="checkbox" style="
			height: 13px;
			width: 13px;
			padding-top: 20px;
			border-top-width: 20px;
			margin-top: 10px;
			margin-left: 127px;
			border-right-width: 10px;
			"/>
			Revamp existing website
			</div>
			<div class="col-sm-8" style="margin-top: 10px;width: 820px;left: 97px;margin-left: 1px;">
			<input name="service5" id="checkboxes-4" value="Buy ready-to-use Scripts" type="checkbox" style="margin-left: 1.5px;"/>
			Buy ready-to-use Scripts
		
			&nbsp;
		
			<input name="service6" id="checkboxes-5" value="Hire Dedicated Development Team" type="checkbox" style="margin-left: 100px;"/>
			Hire Dedicated Development Team
		</div>
					
					
        </div>
		
		</div>
		</div>
		<legend><u>TARGET AUDIENCE:</u></legend>
		
		<div class="col-xs-12">
            <div class="col-md-12">
		
		<div class="form-group has-error" style="height: 100px;" align="right">
		<label class="control-label col-sm-4">Who is your target audience? </label>
		     <div class="col-sm-8">                
			<textarea maxlength="250" class="form-control" type="textarea" name="targetaudience" placeholder="Please mention their age-group, demography & geographical presence" required="required"></textarea>
			</div>
			</div>
			<div class="form-group has-error" style="height: 100px;" align="right">
		<label class="control-label col-sm-4">What is the focus of the site/ application?</label>
		      <div class="col-sm-8">               
			<textarea maxlength="250" class="form-control" type="textarea" name="focusapplication" placeholder="Brief" required="required"></textarea>
			</div>
			</div>
			<div class="form-group has-error" style="height: 100px;" align="right">
		<label class="control-label col-sm-4">Which existing application appeals to your target audience?</label>
		    <div class="col-sm-8">                 
			<textarea maxlength="250" class="form-control" type="textarea" name="existingtarget" placeholder="Brief" required="required"></textarea>
			</div>
			</div>
		
		</div>
		</div>
		
					<ul class="list-inline pull-right">
					<li><button type="button" class="btn btn-default prevBtn btn-primary">Previous</button></li>
                <li><button class="btn btn-default nextBtn btn-primary" type="button">Next</button></li>
				</ul>
            
    </div>
    <div class="row setup-content" id="step-3" style="display: none;">
                <legend><u>INFORMATION ABOUT YOUR COMPETITORS:</u></legend>
		<div class="form-group" style="height: 150px;">
		<label class="col-md-4 control-label" for="prependedtext">We would like to know who your prospective competitors are. Please provide their web URL’s for us to review</label>
		<div class="col-md-6">
		<div class="field_wrapper">
		<div>
    	<input type="text1" name="field_name[]" value="" required="required" pattern="https?://.+" style="width: 504px; padding-top: 5px; padding-bottom: 5px; border-top-width: 2px; border-bottom-width: 2px; height: 34px;"/>
        <a class="add_button" title="Add field"><img src="add-icon.png"/></a>
		</div>
		</div>
		</div>
		
		</div>
			<legend><u>BUDGET:</u></legend>	
				
				<div class="form-group has-error" style="height: 70px;" >
            <label class="control-label col-md-4 ">Have you allocated a certain budget for this project?<small>(required)</small></label>
			<input id='budget-see-me' name='budget' type='radio' value="Yes" /> Yes
            <input id='budget-not-watch-me' name='budget' type='radio' value="No"  checked /> No
			
			<div id='show-me-budget' class="form-group has-error" >
			<input maxlength="100" name="USD"  class="form-control" placeholder="Enter Budget in USD" type="number">
			</div>
			</div>
			<legend><u>TIMEFRAME:</u></legend>	
			<div class="form-group" style="height: 50px;">
  <label class="col-md-4 control-label">When do you intend to launch this application?</label>  

<table border="0" cellspacing="0" >

<tr><td  align=left  >   

<select  name=day required="required" style="
    width: 127px;
    height: 37px;
    border-top-width: 2px;
    border-bottom-width: 2px;
    border-left-width: 2px;
    border-right-width: 2px;
">
<option value=''>Select Days</option>
<option value='00'>00</option>
<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='30'>31</option>
<option value='32'>32</option>
<option value='33'>33</option>
<option value='34'>34</option>
<option value='35'>35</option>
<option value='36'>36</option>
<option value='37'>37</option>
<option value='38'>38</option>
<option value='39'>39</option>
<option value='40'>40</option>
<option value='41'>41</option>
<option value='42'>42</option>
<option value='43'>43</option>
<option value='44'>44</option>
<option value='45'>45</option>
<option value='46'>46</option>
<option value='47'>47</option>
<option value='48'>48</option>
<option value='49'>49</option>
<option value='50'>50</option>
<option value='51'>51</option>
</select>



</td><td  align=left  >   

  &nbsp;&nbsp;Days&nbsp;&nbsp;/&nbsp;&nbsp;<select required="required" name=month style="
    width: 127px;
    height: 37px;
    border-top-width: 2px;
    border-bottom-width: 2px;
    border-left-width: 2px;
    border-right-width: 2px;
">
<option value=''>Select Months</option>
<option value='00'>00</option>
<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
</select>


</td><td  align=left  >
&nbsp;&nbsp;Months&nbsp;&nbsp;/&nbsp;&nbsp;<select  required="required" name=week style="
    width: 127px;
    height: 37px;
    border-top-width: 2px;
    border-bottom-width: 2px;
    border-left-width: 2px;
    border-right-width: 2px;
">
<option value=''>Select Weeks</option>
<option value='00'>00</option>
<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
</select>
&nbsp;&nbsp;weeks&nbsp;&nbsp;
</table>

</div>	
				
				
				
				
				
				
				
				
				
				
				<ul class="list-inline pull-right">
					<li><button type="button" class="btn btn-default prevBtn btn-primary">Previous</button></li>
                <li><button class="btn btn-success btn-lg btn-primary" name="submit" id="submit" type="submit">Submit</button></li>
			
            </ul>
    </div>
</form>
<?php } ?>
</div>
	<script type="text/javascript">
	$(document).ready(function () {
	
	 $("#show-me-two").hide();
	$("#watch-me").click(function()
  {
   $("#show-me-two").hide();
   });
	
$("#see-me").click(function()
  {
    $("#show-me-two:hidden").show('slow');
   });
   
   
   $("#show-me-budget").hide();
   
   $("#budget-not-watch-me").click(function()
  {
   $("#show-me-budget").hide();
   });
	
$("#budget-see-me").click(function()
  {
    $("#show-me-budget:hidden").show('slow');
   });
 
 
  $("#show-me-other").hide();
  $("#checkboxes").click(function()
  {
    $("#show-me-noone:hidden").show('slow');
   $("#show-me-other").hide();
   });
   $("#checkboxes1").click(function()
  {
    $("#show-me-noone:hidden").show('slow');
   $("#show-me-other").hide();
   });
   $("#checkboxes2").click(function()
  {
    $("#show-me-noone:hidden").show('slow');
   $("#show-me-other").hide();
   });
   $("#checkboxes3").click(function()
  {
    $("#show-me-noone:hidden").show('slow');
   $("#show-me-other").hide();
   });
   $("#checkboxes4").click(function()
  {
    $("#show-me-noone:hidden").show('slow');
   $("#show-me-other").hide();
   });
   $("#checkboxes").click(function()
  {
    if($('checkboxes').prop('checked')===false)
   {
    $('#show-me-noone').hide();
   }
  });
  $("#checkboxes1").click(function()
  {
    if($('checkboxes1').prop('checked')===false)
   {
    $('#show-me-noone').hide();
   }
  });
  $("#checkboxes2").click(function()
  {
    if($('checkboxes2').prop('checked')===false)
   {
    $('#show-me-noone').hide();
   }
  });
  $("#checkboxes3").click(function()
  {
    if($('checkboxes3').prop('checked')===false)
   {
    $('#show-me-noone').hide();
   }
  });
  $("#checkboxes4").click(function()
  {
    if($('checkboxes4').prop('checked')===false)
   {
    $('#show-me-noone').hide();
   }
  });
  $("#checkboxes-5-me").click(function()
  {
    $("#show-me-other:hidden").show('slow');
   $("#show-me-noone").hide();
   });
   $("#checkboxes-5-me").click(function()
  {
    if($('see-me-other').prop('checked')===false)
   {
    $('#show-me-other').hide();
   }
  });
  
 
    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');
			allPrevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url'],input[type='email'],select,textarea,input[type='text1']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        } 
        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });
	allPrevBtn.click(function(){

		var curStep = $(this).closest(".setup-content"),

			curStepBtn = curStep.attr("id"),

			prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

			prevStepWizard.removeAttr('disabled').trigger('click');

	});
    $('div.setup-panel div a.btn-primary').trigger('click');
});
	</script>


</body></html>